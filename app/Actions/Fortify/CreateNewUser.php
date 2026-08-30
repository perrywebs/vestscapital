<?php

namespace App\Actions\Fortify;

use App\Mail\WelcomeEmail;
use App\Mail\AdminNewRegistrationNotification;
use App\Models\User;
use App\Models\Settings;
use App\Models\Agent;
use App\Models\CryptoAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $settings = Settings::where('id', '1')->first();
        $request = request();

        if ($settings->captcha == "true") {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'unique:users,username'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'confirmed', 'min:4', 'max:25'],
                'currency' => ['required', 'string', 'max:10'],
                // 'g-recaptcha-response' => 'required|captcha',
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();
        } else {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'unique:users,username'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'confirmed', 'min:4', 'max:25'],
                'currency' => ['required', 'string', 'max:10'],
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();
        }

        // Handle currency
        $currency = $input['currency'] ?? '$';
        $s_currency = $this->getCurrencySymbol($currency);

        // Handle referral
        $ref_by_id = null;

        // Check session referral first
        if (session('ref_by')) {
            $ref_by = session('ref_by');
            $user = User::where('username', $ref_by)->first();
            if ($user) {
                $ref_by_id = $user->id;
            }
        }
        // Check input referral
        elseif (!empty($input['ref_by'])) {
            $sponsor = User::where('username', $input['ref_by'])->first();
            if ($sponsor) {
                $ref_by_id = $sponsor->id;
            }
        }

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'] ?? null,
            'username' => $input['username'],
            'country' => $input['country'],
            'ref_by' => $ref_by_id,
            'status' => 'active',
            'currency' => $currency,
            's_currency' => $s_currency,
            'password' => Hash::make($input['password']),
        ]);

        $cryptoaccnt = new CryptoAccount();
        $cryptoaccnt->user_id = $user->id;
        $cryptoaccnt->save();

        $request->session()->forget('ref_by');

        try {
            Mail::to($user->email)->send(new WelcomeEmail($user));
        } catch (\Exception $e) {
            \Log::error('Failed to send welcome email to user: ' . $user->email . '. Error: ' . $e->getMessage());
        }

        if (!empty($settings->contact_email)) {
            try {
                Mail::to($settings->contact_email)->send(new AdminNewRegistrationNotification($user));
            } catch (\Exception $e) {
                \Log::error('Failed to send admin new registration notification. Error: ' . $e->getMessage());
            }
        } elseif (!empty($settings->emailfrom)) {
            try {
                Mail::to($settings->emailfrom)->send(new AdminNewRegistrationNotification($user));
            } catch (\Exception $e) {
                \Log::error('Failed to send admin new registration notification. Error: ' . $e->getMessage());
            }
        } else {
            \Log::warning('No admin email configured to send new registration notification.');
        }

        return $user;
    }

    /**
     * Get currency symbol from currency code
     */
    private function getCurrencySymbol($currencyCode)
    {
        $currencies = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'JPY' => '¥',
            'CNY' => '¥',
            'INR' => '₹',
            'AUD' => 'A$',
            'CAD' => 'C$',
            'CHF' => 'Fr',
            'NZD' => 'NZ$',
            'ZAR' => 'R',
            'BRL' => 'R$',
            'NGN' => '₦',
            'KES' => 'KSh',
            'GHS' => 'GH₵',
            'EGP' => 'E£',
            'AED' => 'د.إ',
            'SAR' => 'ر.س',
            'RUB' => '₽',
            'KRW' => '₩',
            'SGD' => 'S$',
            'MYR' => 'RM',
            'PHP' => '₱',
            'PKR' => '₨',
            'TRY' => '₺',
            'MXN' => '$',
            'ARS' => '$',
            'CLP' => '$',
            'COP' => '$',
            'PEN' => 'S/',
            'VND' => '₫',
            'THB' => '฿',
            'IDR' => 'Rp',
            'HKD' => 'HK$',
            'TWD' => 'NT$',
            'SEK' => 'kr',
            'NOK' => 'kr',
            'DKK' => 'kr',
            'PLN' => 'zł',
            'CZK' => 'Kč',
            'HUF' => 'Ft',
            'ILS' => '₪',
            'CLF' => 'UF',
            'XAF' => 'FCFA',
            'XOF' => 'CFA',
            'XCD' => '$',
            'JMD' => 'J$',
            'TTD' => 'TT$',
            'BBD' => 'Bds$',
            'BSD' => 'B$',
            'BMD' => '$',
            'KYD' => 'CI$',
            'BZD' => 'BZ$',
            'DOP' => 'RD$',
            'GTQ' => 'Q',
            'HNL' => 'L',
            'NIO' => 'C$',
            'PYG' => '₲',
            'UYU' => '$U',
            'BWP' => 'P',
            'MWK' => 'MK',
            'MZN' => 'MT',
            'NAD' => 'N$',
            'ZMW' => 'ZK',
            'MUR' => '₨',
            'SCR' => '₨',
            'LKR' => 'Rs',
            'NPR' => 'Rs',
            'BDT' => '৳',
            'LAK' => '₭',
            'MMK' => 'K',
            'KHR' => '៛',
            'AFN' => '؋',
            'IRR' => '﷼',
            'IQD' => 'د.ع',
            'JOD' => 'د.ا',
            'KWD' => 'د.ك',
            'LYD' => 'ل.د',
            'MAD' => 'د.م.',
            'OMR' => 'ر.ع.',
            'QAR' => 'ر.ق',
            'SYP' => '£S',
            'TND' => 'د.ت',
            'YER' => '﷼',
            'BHD' => 'د.ب',
            'LBP' => 'ل.ل',
            'SDG' => 'ج.س.',
            'MRU' => 'UM',
            'BTN' => 'Nu.',
            'MVR' => 'Rf',
            'PGK' => 'K',
            'SBD' => 'SI$',
            'FJD' => 'FJ$',
            'TOP' => 'T$',
            'WST' => 'WS$',
            'VUV' => 'VT',
        ];

        return $currencies[$currencyCode] ?? $currencyCode;
    }
}
