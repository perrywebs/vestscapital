<?php
    $captcha = strtoupper(substr(md5(rand()), 0, 6)); // Generate random text
    use App\Helpers\CurrencyHelper;
    $countryCurrencies = CurrencyHelper::getCountriesWithCurrencies();
    $currencySymbols = CurrencyHelper::getCurrencySymbols();
?>

<?php $__env->startSection('title', 'Create Account'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Fintech Trading Platform Registration -->
    <div class="min-h-screen bg-gray-900 relative overflow-hidden py-8 sm:py-12">
        <div class="relative z-10 flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-2xl">
                <!-- Professional Trading Registration Card -->
                <div class="bg-gray-900 border border-gray-700 rounded-2xl sm:rounded-3xl p-6 sm:p-8 lg:p-10 shadow-2xl"
                    x-data="registrationForm()" x-cloak>

                    <!-- Header Section -->
                    <div class="text-center mb-8">
                        <!-- Logo -->
                        <div class="flex items-center justify-center mb-6">
                            <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>" class="h-12 sm:h-16 w-auto"
                                alt="<?php echo e($settings->site_name); ?>" />
                        </div>

                        <!-- Title -->
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-2">
                            Join <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400"><?php echo e($settings->site_name); ?></span>
                        </h1>
                        <p class="text-gray-300 text-sm sm:text-base lg:text-lg mb-6">
                            Start your journey
                        </p>
                    </div>

                    <!-- Enhanced Progress Steps - Mobile Optimized -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between sm:justify-center sm:space-x-8">
                            <template x-for="(step, index) in steps" :key="index">
                                <div class="flex flex-col items-center">
                                    <!-- Step Circle -->
                                    <div class="relative mb-2">
                                        <div class="flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 rounded-full text-xs sm:text-sm font-bold transition-all duration-300"
                                            :class="currentStep > index ? 'bg-green-500 text-white' :
                                                currentStep === index ? 'bg-blue-500 text-white' :
                                                'bg-gray-700 text-gray-400'">
                                            <span x-show="currentStep <= index" x-text="index + 1"></span>
                                            <i x-show="currentStep > index" data-lucide="check"
                                                class="w-4 h-4 sm:w-5 sm:h-5"></i>
                                        </div>
                                        <!-- Active Step Pulse -->
                                        <div x-show="currentStep === index"
                                            class="absolute inset-0 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-500 animate-ping opacity-20">
                                        </div>
                                    </div>

                                    <!-- Step Label -->
                                    <div class="text-center">
                                        <div class="text-xs sm:text-sm font-medium transition-colors duration-300"
                                            :class="currentStep >= index ? 'text-white' : 'text-gray-500'"
                                            x-text="step.title"></div>
                                        <div class="text-xs text-gray-500 hidden sm:block" x-text="step.description"></div>
                                    </div>

                                    <!-- Connector Line -->
                                    <div x-show="index < steps.length - 1"
                                        class="hidden sm:block absolute top-4 left-1/2 w-16 h-0.5 transition-colors duration-300"
                                        :class="currentStep > index ? 'bg-green-500' : 'bg-gray-700'"
                                        style="transform: translateX(2rem);"></div>
                                </div>
                            </template>
                        </div>
                    </div>


                    <!-- Registration Form -->
                    <form action="<?php echo e(route('register')); ?>" method="POST" class="space-y-6" id="register" x-cloak>

                        <?php echo csrf_field(); ?>

                        <!-- Global Validation Errors -->
                        <?php if($errors->any()): ?>
                            <div class="mb-6 rounded-xl border border-red-500/30 bg-red-500/10 p-4">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="alert-circle" class="w-5 h-5 text-red-400"></i>
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-red-300">
                                            Please fix the following errors:
                                        </h4>

                                        <ul class="mt-2 space-y-1 text-sm text-red-400">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="flex items-start gap-2">
                                                    <span>•</span>
                                                    <span><?php echo e($error); ?></span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>


                        <!-- Step 1: Personal Information -->
                        <div x-show="currentStep === 0" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-4"
                            x-transition:enter-end="opacity-100 transform translate-x-0">

                            <!-- Step Header -->
                            <div class="mb-6 p-4 bg-blue-500/10 rounded-xl border border-blue-500/20">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-blue-500/20 rounded-lg">
                                        <i data-lucide="user-circle" class="w-5 h-5 text-blue-400"></i>
                                    </div>

                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-white">
                                            Personal Information
                                        </h3>

                                        <p class="text-gray-400 text-sm">
                                            Create your trading profile
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                                <!-- Username -->
                                <div class="space-y-2">
                                    <label for="username" class="block text-sm font-bold text-gray-200">
                                        Trading Username
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="user"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="text" name="username" id="username" value="<?php echo e(old('username')); ?>"
                                            required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('username') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="Choose username">
                                    </div>

                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <!-- Full Name -->
                                <div class="space-y-2">
                                    <label for="name" class="block text-sm font-bold text-gray-200">
                                        Full Name
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="user-check"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>"
                                            required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('name') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="Enter full name">
                                    </div>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <!-- Email -->
                                <div class="space-y-2">
                                    <label for="email" class="block text-sm font-bold text-gray-200">
                                        Email Address
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="mail"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"
                                            required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('email') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="your.email@example.com">
                                    </div>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <!-- Phone -->
                                <div class="space-y-2">
                                    <label for="phone" class="block text-sm font-bold text-gray-200">
                                        Phone Number
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="phone"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="tel" name="phone" id="phone" value="<?php echo e(old('phone')); ?>"
                                            required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('phone') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="+1 (555) 123-4567">
                                    </div>

                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                            </div>
                        </div>


                        <!-- Step 2: Location & Currency -->
                        <div x-show="currentStep === 1" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-4"
                            x-transition:enter-end="opacity-100 transform translate-x-0">

                            <!-- Step Header -->
                            <div class="mb-6 p-4 bg-purple-500/10 rounded-xl border border-purple-500/20">
                                <div class="flex items-center gap-3">

                                    <div class="p-2 bg-purple-500/20 rounded-lg">
                                        <i data-lucide="globe-2" class="w-5 h-5 text-purple-400"></i>
                                    </div>

                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-white">
                                            Location & Currency
                                        </h3>

                                        <p class="text-gray-400 text-sm">
                                            Set your regional trading preferences
                                        </p>
                                    </div>

                                </div>
                            </div>


                            <div class="grid grid-cols-1 gap-4 sm:gap-6">

                                <!-- Country -->
                                <div class="space-y-2">

                                    <label for="country" class="block text-sm font-bold text-gray-200">
                                        Country
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">

                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 z-10">
                                            <i data-lucide="flag"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <select name="country" id="country" required @change="updateCurrency($event)"
                                            class="block w-full rounded-xl border <?php echo e($errors->has('country') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-8 py-4 text-white focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold appearance-none">

                                            <option value="" disabled <?php echo e(old('country') ? '' : 'selected'); ?>>
                                                Select your country
                                            </option>

                                            <?php echo $__env->make('auth.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        </select>

                                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                            <i data-lucide="chevron-down" class="h-4 w-4 text-gray-400"></i>
                                        </div>

                                    </div>

                                    <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>

                                <!-- Currency Selection -->
                                <div class="space-y-2">

                                    <label for="currency" class="block text-sm font-bold text-gray-200">
                                        Preferred Currency
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">

                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 z-10">
                                            <i data-lucide="coins"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <select name="currency" id="currency" required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('currency') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-8 py-4 text-white focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold appearance-none">

                                            <option value="" disabled <?php echo e(old('currency') ? '' : 'selected'); ?>>
                                                Select your currency
                                            </option>

                                            <?php $__currentLoopData = $currencySymbols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $symbol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($code); ?>"
                                                    <?php echo e(old('currency') == $code ? 'selected' : ''); ?>>
                                                    <?php echo e($symbol); ?> - <?php echo e($code); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>

                                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                            <i data-lucide="chevron-down" class="h-4 w-4 text-gray-400"></i>
                                        </div>

                                    </div>

                                    <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>

                            </div>


                            <!-- Trading Preferences Info -->
                            <div class="mt-6 p-4 bg-blue-500/10 rounded-xl border border-blue-500/20">

                                <div class="flex items-start gap-3">

                                    <i data-lucide="info" class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0"></i>

                                    <div class="text-sm">

                                        <p class="text-blue-300 font-bold mb-1">
                                            Regional Trading Information
                                        </p>

                                        <p class="text-gray-300">
                                            Your location and currency preferences help us provide region-specific features,
                                            compliance, and optimal server connections for faster trading execution.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Step 3: Security -->
                        <div x-show="currentStep === 2" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-4"
                            x-transition:enter-end="opacity-100 transform translate-x-0">

                            <!-- Step Header -->
                            <div class="mb-6 p-4 bg-green-500/10 rounded-xl border border-green-500/20">

                                <div class="flex items-center gap-3">

                                    <div class="p-2 bg-green-500/20 rounded-lg">
                                        <i data-lucide="shield-check" class="w-5 h-5 text-green-400"></i>
                                    </div>

                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-white">
                                            Account Security
                                        </h3>

                                        <p class="text-gray-400 text-sm">
                                            Secure your trading account
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                                <!-- Password -->
                                <div class="space-y-2">

                                    <label for="password" class="block text-sm font-bold text-gray-200">
                                        Password
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">

                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="lock"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="password" name="password" id="password" required
                                            class="block w-full rounded-xl border <?php echo e($errors->has('password') ? 'border-red-500' : 'border-gray-600'); ?> bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="Create strong password">
                                    </div>

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>


                                <!-- Confirm Password -->
                                <div class="space-y-2">

                                    <label for="password_confirmation" class="block text-sm font-bold text-gray-200">
                                        Confirm Password
                                        <span class="text-red-400">*</span>
                                    </label>

                                    <div class="relative group">

                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                            <i data-lucide="key"
                                                class="h-5 w-5 text-gray-400 group-focus-within:text-blue-400 transition-colors"></i>
                                        </div>

                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            required
                                            class="block w-full rounded-xl border border-gray-600 bg-gray-900 pl-12 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold"
                                            placeholder="Confirm your password">
                                    </div>

                                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-sm text-red-400 flex items-center gap-1">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                            <?php echo e($message); ?>

                                        </p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>

                            </div>


                            <!-- Referral Section -->
                            <div class="mt-6 p-4 bg-indigo-500/10 rounded-xl border border-indigo-500/20">
                                <div class="flex items-start gap-3">

                                    <div class="p-2 bg-indigo-500/20 rounded-lg flex-shrink-0">
                                        <i data-lucide="users" class="w-5 h-5 text-indigo-400"></i>
                                    </div>

                                    <div class="flex-1">
                                        <h4 class="text-sm font-bold text-white mb-2">
                                            Referral Code (Optional)
                                        </h4>

                                        <p class="text-xs text-gray-300 mb-3">
                                            Enter a referral code if you were invited by an existing member
                                        </p>

                                        <div class="relative group">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                                <i data-lucide="link-2"
                                                    class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-400 transition-colors"></i>
                                            </div>

                                            <input type="text" name="ref_by" id="ref_by"
                                                value="<?php echo e(old('ref_by') ?? session('ref_by')); ?>"
                                                class="block w-full rounded-xl border border-gray-600 bg-gray-900 pl-12 pr-4 py-3 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/20 focus:bg-gray-800 transition-all duration-200 text-sm font-bold uppercase"
                                                placeholder="Enter referral code (optional)">
                                        </div>

                                        <?php $__errorArgs = ['ref_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-sm text-red-400 mt-2 flex items-center gap-1">
                                                <i data-lucide="alert-circle" class="w-4 h-4"></i>
                                                <?php echo e($message); ?>

                                            </p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                </div>
                            </div>


                            <!-- Password Requirements -->
                            <div class="mt-6 p-4 bg-gray-800/50 rounded-xl border border-gray-700">

                                <p class="text-sm font-bold text-gray-200 mb-2">
                                    Password Requirements:
                                </p>

                                <ul class="text-xs text-gray-300 space-y-1">

                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check" class="w-3 h-3 text-green-400"></i>
                                        At least 4 characters long
                                    </li>

                                </ul>

                            </div>


                            <!-- Terms -->
                            <div class="mt-6 p-6 bg-blue-500/10 rounded-xl border border-blue-500/20">

                                <div class="flex items-start gap-4">

                                    <div class="flex items-center h-5 mt-1">

                                        <input type="checkbox" name="agree" id="agree" value="1"
                                            <?php echo e(old('agree') ? 'checked' : ''); ?> required
                                            class="h-4 w-4 rounded border-gray-600 bg-gray-900 text-blue-500 focus:ring-2 focus:ring-blue-400/20 transition-colors">

                                    </div>

                                    <div class="flex-1">

                                        <label for="agree" class="text-sm font-bold text-gray-200 leading-relaxed">

                                            I agree to <?php echo e($settings->site_name); ?>'s

                                            <a href="rules" target="_blank"
                                                class="text-blue-400 hover:text-blue-300 font-bold underline underline-offset-2">
                                                Terms and Conditions
                                            </a>

                                            and acknowledge that I have read and understood the

                                            <a href="#"
                                                class="text-blue-400 hover:text-blue-300 font-bold underline underline-offset-2">
                                                Privacy Policy
                                            </a>

                                        </label>

                                        <p class="text-xs text-gray-400 mt-2">
                                            By creating an account, you confirm that you are at least 18 years old
                                            and agree to receive trading updates and market insights.
                                        </p>

                                    </div>

                                </div>

                                <?php $__errorArgs = ['agree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-sm text-red-400 mt-2">
                                        <?php echo e($message); ?>

                                    </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>

                        </div>


                        <!-- Navigation -->
                        <div
                            class="flex flex-col sm:flex-row justify-between items-center mt-10 pt-8 border-t border-gray-700 gap-4">

                            <!-- Previous -->
                            <button type="button" @click="previousStep()" x-show="currentStep > 0"
                                class="inline-flex items-center gap-2 px-6 py-3 text-gray-400 hover:text-white transition-all duration-200 rounded-xl hover:bg-gray-800/50 group">

                                <i data-lucide="arrow-left"
                                    class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>

                                <span class="font-bold">
                                    Previous Step
                                </span>

                            </button>


                            <!-- Progress -->
                            <div class="flex items-center gap-2 text-sm text-gray-400">

                                <span class="font-bold" x-text="`Step ${currentStep + 1} of ${steps.length}`">
                                </span>

                            </div>


                            <!-- Continue -->
                            <button type="button" @click="nextStep()" x-show="currentStep < steps.length - 1"
                                class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 group">

                                <span>Continue</span>

                                <i data-lucide="arrow-right"
                                    class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>

                            </button>


                            <!-- Submit -->
                            <button type="submit" x-show="currentStep === steps.length - 1"
                                class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 group">

                                <i data-lucide="user-plus" class="w-5 h-5"></i>

                                <span>Create Trading Account</span>

                                <i data-lucide="sparkles" class="w-4 h-4 group-hover:rotate-12 transition-transform"></i>

                            </button>

                        </div>


                        <!-- Footer -->
                        <div class="mt-8 text-center space-y-4">

                            <div class="flex items-center justify-center gap-6 text-sm">

                                <p class="text-gray-400">
                                    Already have an account?

                                    <a href="<?php echo e(route('login')); ?>"
                                        class="font-bold text-blue-400 hover:text-blue-300 transition-colors underline underline-offset-2">
                                        Sign in here
                                    </a>
                                </p>

                            </div>


                            <!-- Trust Indicators -->
                            <div class="flex items-center justify-center gap-8 py-4 text-xs text-gray-500">

                                <div class="flex items-center gap-1">
                                    <i data-lucide="shield" class="w-3 h-3"></i>
                                    <span>SSL Secured</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <i data-lucide="lock" class="w-3 h-3"></i>
                                    <span>256-bit Encryption</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <i data-lucide="award" class="w-3 h-3"></i>
                                    <span>Regulated Platform</span>
                                </div>

                            </div>


                            <p class="text-xs text-gray-500">
                                © <?php echo e(date('Y')); ?> <?php echo e($settings->site_name); ?>.
                                All rights reserved. |
                                Licensed and regulated trading platform.
                            </p>

                        </div>

                    </form>
                </div>
            </div>
        </div>





        <style>
            .skiptranslate {
                display: none !important;
            }

            body {
                top: 0 !important;
            }

            [x-cloak] {
                display: none !important;
            }
        </style>

        <div id="google_translate_element" style="display:none"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: "en"
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript"
            src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

        <script>
            function registrationForm() {
                return {
                    currentStep: 0,
                    steps: [{
                            title: 'Personal Info',
                            description: 'Basic details',
                            completed: false
                        },
                        {
                            title: 'Location & Currency',
                            description: 'Regional settings',
                            completed: false
                        },
                        {
                            title: 'Security',
                            description: 'Account protection',
                            completed: false
                        }
                    ],

                    updateCurrency(event) {
                        const country = event.target.value;
                        // You can use AJAX here to fetch currency based on country
                        // For now, we'll use a simple mapping
                        const currencyMap = <?php echo json_encode($countryCurrencies, 15, 512) ?>;
                        if (country && currencyMap[country]) {
                            document.getElementById('currency').value = currencyMap[country];
                        }
                    },

                    nextStep() {
                        if (this.validateCurrentStep()) {
                            this.steps[this.currentStep].completed = true;
                            if (this.currentStep < this.steps.length - 1) {
                                this.currentStep++;
                                this.scrollToTop();
                            }
                        }
                    },

                    previousStep() {
                        if (this.currentStep > 0) {
                            this.currentStep--;
                            this.scrollToTop();
                        }
                    },

                    scrollToTop() {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    },

                    validateCurrentStep() {
                        const step = this.currentStep;
                        let isValid = true;
                        let missingFields = [];

                        if (step === 0) {
                            // Validate personal information
                            const fields = [{
                                    id: 'username',
                                    name: 'Username'
                                },
                                {
                                    id: 'name',
                                    name: 'Full Name'
                                },
                                {
                                    id: 'email',
                                    name: 'Email'
                                },
                                {
                                    id: 'phone',
                                    name: 'Phone Number'
                                }
                            ];

                            fields.forEach(field => {
                                const value = document.getElementById(field.id).value.trim();
                                if (!value) {
                                    missingFields.push(field.name);
                                    isValid = false;
                                }
                            });

                            // Email validation
                            const email = document.getElementById('email').value.trim();
                            if (email && !email.includes('@')) {
                                missingFields.push('Valid Email');
                                isValid = false;
                            }

                        } else if (step === 1) {
                            // Validate location and currency
                            const country = document.getElementById('country').value;
                            const currency = document.getElementById('currency').value;

                            if (!country || country === 'Select your country') {
                                missingFields.push('Country');
                                isValid = false;
                            }

                            if (!currency || currency === 'Select your currency') {
                                missingFields.push('Currency');
                                isValid = false;
                            }

                        } else if (step === 2) {
                            // Validate security
                            const password = document.getElementById('password').value;
                            const confirmPassword = document.getElementById('password_confirmation').value;
                            const agree = document.getElementById('agree').checked;

                            if (!password) {
                                missingFields.push('Password');
                                isValid = false;
                            } else if (password.length < 4) {
                                missingFields.push('Password (minimum 4 characters)');
                                isValid = false;
                            }

                            if (!confirmPassword) {
                                missingFields.push('Password Confirmation');
                                isValid = false;
                            } else if (password !== confirmPassword) {
                                missingFields.push('Matching Passwords');
                                isValid = false;
                            }

                            if (!agree) {
                                missingFields.push('Terms Agreement');
                                isValid = false;
                            }
                        }

                        if (!isValid) {
                            const message = missingFields.length === 1 ?
                                `Please provide: ${missingFields[0]}` :
                                `Please provide: ${missingFields.join(', ')}`;

                            // Show professional alert
                            this.showAlert('Incomplete Information', message, 'warning');
                        }

                        return isValid;
                    },

                    showAlert(title, message, type = 'info') {
                        // Simple alert fallback if SweetAlert2 is not available
                        if (typeof Swal !== 'undefined') {
                            Swal.fire({
                                title: title,
                                text: message,
                                icon: type,
                                confirmButtonText: 'Got it',
                                confirmButtonColor: '#3B82F6'
                            });
                        } else {
                            alert(`${title}: ${message}`);
                        }
                    }
                }
            }

            // Enhanced initialization with better error handling
            document.addEventListener('alpine:init', () => {
                setTimeout(() => {
                    if (typeof lucide !== 'undefined') {
                        lucide.createIcons();
                    }
                }, 100);
            });

            document.addEventListener('alpine:updated', () => {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            });

            // Form submission enhancement
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('register');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        const submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            submitBtn.disabled = true;
                            submitBtn.innerHTML =
                                '<i data-lucide="loader-2" class="w-4 h-4 animate-spin mr-2"></i>Creating Account...';
                        }
                    });
                }
            });
        </script>

        </body>

        </html>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views/auth/register.blade.php ENDPATH**/ ?>