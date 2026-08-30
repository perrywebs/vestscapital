<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Mail\AdminNewRegistrationNotification;
use App\Models\CryptoAccount;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ApiAuthController extends Controller
{
    use PasswordValidationRules;

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string',
            'username' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required',
            'country' => 'required',
            'password' => $this->passwordRules(),
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'username' => $request['username'],
            'country' => $request['country'],
            'status' => 'active',
            'password' => Hash::make($request['password']),
            'bonus' => 15,
        ]);

        $cryptoaccnt = new CryptoAccount();
        $cryptoaccnt->user_id = $user->id;
        $cryptoaccnt->save();

        Mail::to($user->email)->send(new WelcomeEmail($user));

        $settings = Settings::find(1);
        if (!empty($settings->contact_email)) {
            try {
                Mail::to($settings->contact_email)->send(new AdminNewRegistrationNotification($user));
            } catch (\Exception $e) {
                \Log::error('Failed to send admin new registration notification. Error: ' . $e->getMessage());
            }
        }

        return response()->json([
            'message' => 'Registration is successful.',
            'status_code' => 200,
        ]);
    }
}