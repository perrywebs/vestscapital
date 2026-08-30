<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-3 sm:px-4 lg:px-6 py-4 sm:py-6 lg:py-8" x-data="{ showCopied: false }">

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.notify-alert','data' => []]); ?>
<?php $component->withName('notify-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <!-- Dashboard Header -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6 sm:mb-8 gap-4">
            <div class="text-center lg:text-left">
                <?php
                    $userCreatedAt = \Carbon\Carbon::parse(Auth::user()->created_at);
                    $secondsSinceCreated = now()->diffInSeconds($userCreatedAt);
                ?>

                <?php if($secondsSinceCreated <= 90): ?>
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white">
                        Welcome, <?php echo e(Auth::user()->name); ?>!
                    </h1>
                <?php else: ?>
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white">
                        Welcome back, <?php echo e(Auth::user()->name); ?>!
                    </h1>
                <?php endif; ?>
            </div>
            <div class="hidden sm:flex flex-col sm:flex-row gap-2 sm:gap-3">
                <?php if($settings->wallet_status == 'on'): ?>
                    <a href="<?php echo e(route('connect_wallet')); ?>"
                        class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:py-3 bg-gradient-to-r from-indigo-600 to-blue-500 text-white rounded-lg shadow hover:from-indigo-700 transition animate-pulse text-sm sm:text-base">
                        <i data-lucide="link" class="w-4 h-4 sm:w-5 sm:h-5"></i> Connect Wallet
                    </a>
                <?php else: ?>
                    <div
                        class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:py-3 bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-lg text-sm sm:text-base">
                        <i data-lucide="check-circle" class="w-4 h-4 sm:w-5 sm:h-5"></i> Wallet Connected
                    </div>
                <?php endif; ?>
                <a href="<?php echo e(route('mplans')); ?>"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition text-sm sm:text-base">
                    <i data-lucide="trending-up" class="w-4 h-4 sm:w-5 sm:h-5"></i> Invest Now
                </a>
            </div>
        </div>




        <!-- Signal Strength -->
        


        <!-- Investment Dashboard - Clean Modern Layout -->
        <div class="grid grid-cols-1 xl:grid-cols-5 gap-4 sm:gap-6 items-stretch mb-6 sm:mb-8">
            <!-- Account Balance -->
            <div class="xl:col-span-2 h-full rounded-2xl bg-white dark:bg-gray-900 p-4 sm:p-5 lg:p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 transition-all group"
                id="balanceCard">
                <div class="flex justify-between items-start mb-4">
                    <div class="text-center sm:text-left w-full sm:w-auto">
                        <h2
                            class="text-base sm:text-lg font-semibold text-gray-800 dark:text-white flex items-center justify-center sm:justify-start">
                            <i data-lucide="wallet" class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-gray-500 dark:text-gray-300"></i>
                            Account Balance
                        </h2>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Your available funds</p>
                    </div>
                    
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center justify-center sm:justify-start mb-3">
                        <h3 id="balanceAmount"
                            class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mr-2 break-all">
                            <?php echo e(Auth::user()->currency); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?>

                        </h3>
                        <h3 id="hiddenBalance"
                            class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mr-2 hidden">
                            ••••••</h3>
                    </div>

                    <div
                        class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 mb-4 w-fit mx-auto sm:mx-0">
                        <i data-lucide="check-circle" class="w-3 h-3 mr-1"></i> Available for Withdrawal
                    </div>

                    <?php if(isset($settings->enable_kyc) && $settings->enable_kyc === 'yes'): ?>
                        <!-- KYC Status Notification -->
                        <div class="mb-3 w-fit mx-auto sm:mx-0">
                            <?php if(Auth::user()->account_verify === 'Verified'): ?>
                                <div
                                    class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 animate-pulse">
                                    <i data-lucide="shield-check" class="w-3 h-3 mr-1"></i>
                                    <span class="font-medium">Verified Account</span>
                                </div>
                            <?php elseif(Auth::user()->account_verify === 'Under review'): ?>
                                <div
                                    class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 dark:text-yellow-400 animate-pulse">
                                    <i data-lucide="clock" class="w-3 h-3 mr-1"></i>
                                    <span class="font-medium">Under Review</span>
                                </div>
                            <?php else: ?>
                                <div
                                    class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 animate-pulse">
                                    <i data-lucide="alert-circle" class="w-3 h-3 mr-1"></i>
                                    <span class="font-medium">Unverified</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-4 text-center sm:text-left">Last updated:
                        <?php echo e(now()->format('M d, Y h:i A')); ?></p>

                    <div class="mt-auto flex flex-col sm:flex-row gap-2">
                        <a href="<?php echo e(route('deposits')); ?>"
                            class="flex items-center justify-center w-full gap-1 text-xs sm:text-sm font-medium px-3 sm:px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-white transition">
                            <i data-lucide="plus-circle" class="w-4 h-4"></i> Deposit
                        </a>
                        <a href="<?php echo e(route('withdrawalsdeposits')); ?>"
                            class="flex items-center justify-center w-full gap-1 text-xs sm:text-sm font-medium px-3 sm:px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-white transition">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i> Withdraw
                        </a>
                    </div>
                </div>
            </div>

            <!-- Secondary Metrics -->
            <div class="xl:col-span-3 grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-2 gap-3 sm:gap-4">
                <?php
                    $cards = [
                        ['label' => 'Total Profit', 'value' => Auth::user()->roi, 'icon' => 'dollar-sign'],
                        ['label' => 'Total Deposit', 'value' => $deposited, 'icon' => 'arrow-down'],
                        ['label' => 'Total Withdrawal', 'value' => $total_withdrawal, 'icon' => 'arrow-up'],
                        ['label' => 'Bonus', 'value' => Auth::user()->bonus ?? 0, 'icon' => 'gift'],
                    ];
                ?>

                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="rounded-2xl bg-white dark:bg-gray-900 p-3 sm:p-4 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs sm:text-sm text-gray-600 dark:text-gray-400"><?php echo e($card['label']); ?></span>
                            <div
                                class="w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800">
                                <i data-lucide="<?php echo e($card['icon']); ?>"
                                    class="w-3 h-3 sm:w-4 sm:h-4 text-gray-500 dark:text-gray-300"></i>
                            </div>
                        </div>

                        <h3 class="text-sm sm:text-lg font-semibold text-gray-900 dark:text-white mb-1 truncate">
                            <?php echo e(Auth::user()->currency); ?><?php echo e(number_format($card['value'], 2, '.', ',')); ?>

                        </h3>

                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-auto flex items-center gap-1">
                            <i data-lucide="calendar" class="w-3 h-3"></i>
                            <span><?php echo e($card['label'] === 'Total Profit' ? 'Last period' : 'All time'); ?></span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>




        <?php if(isset($settings->enable_kyc) && $settings->enable_kyc === 'yes'): ?>
            <!-- KYC Verification Component -->
            <div class="mb-6 sm:mb-8" x-data="{ kycDropdownOpen: false }" x-cloak>
                <?php if(Auth::user()->account_verify === 'Verified'): ?>
                    <!-- Verified Status -->
                    <div
                        class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 p-4 sm:p-6 shadow-sm">
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <div
                                class="w-10 h-10 sm:w-12 sm:h-12 bg-green-50 dark:bg-green-900/20 rounded-lg flex items-center justify-center">
                                <i data-lucide="check-circle"
                                    class="w-5 h-5 sm:w-6 sm:h-6 text-green-600 dark:text-green-400"></i>
                            </div>
                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="text-base sm:text-lg font-medium text-gray-900 dark:text-white mb-1">
                                    Account Verified
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Your identity has been verified. All features are now available.
                                </p>
                            </div>
                            <div
                                class="px-3 py-1 bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-full text-xs font-medium">
                                Verified
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- KYC Verification Needed -->
                    <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 shadow-sm">
                        <!-- Header -->
                        <div class="p-4 sm:p-6 border-b border-gray-100 dark:border-gray-800">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-50 dark:bg-blue-900/20 rounded-lg flex items-center justify-center">
                                        <i data-lucide="shield-check"
                                            class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600 dark:text-blue-400"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-base sm:text-lg font-medium text-gray-900 dark:text-white mb-1">
                                            Identity Verification
                                        </h3>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                                            Complete verification to access all features
                                        </p>
                                    </div>
                                </div>

                                <!-- Toggle Button -->
                                <button @click="kycDropdownOpen = !kycDropdownOpen"
                                    class="w-full sm:w-auto px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                    <span class="flex items-center justify-center gap-2">
                                        <span>View Details</span>
                                        <i data-lucide="chevron-down" :class="kycDropdownOpen ? 'rotate-180' : 'rotate-0'"
                                            class="w-4 h-4 transition-transform"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Dropdown Content -->
                        <div x-show="kycDropdownOpen" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1"
                            class="p-4 sm:p-6 border-t border-gray-100 dark:border-gray-800">

                            <?php if(Auth::user()->account_verify === 'Under review'): ?>
                                <!-- Under Review State -->
                                <div class="text-center space-y-4">
                                    <div
                                        class="w-16 h-16 mx-auto bg-yellow-50 dark:bg-yellow-900/20 rounded-full flex items-center justify-center">
                                        <i data-lucide="clock" class="w-8 h-8 text-yellow-600 dark:text-yellow-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                                            Under Review
                                        </h4>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm max-w-md mx-auto">
                                            Your documents are being reviewed. We'll notify you once the verification is
                                            complete.
                                        </p>
                                    </div>

                                    <!-- Simple Progress -->
                                    <div class="max-w-xs mx-auto">
                                        <div
                                            class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-2">
                                            <span>Submitted</span>
                                            <span>Review</span>
                                            <span>Complete</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1.5">
                                            <div class="bg-yellow-500 h-1.5 rounded-full w-2/3"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- Verification Needed State -->
                                <div class="text-center space-y-6">
                                    <div
                                        class="w-16 h-16 mx-auto bg-gray-50 dark:bg-gray-800 rounded-full flex items-center justify-center">
                                        <i data-lucide="user-plus" class="w-8 h-8 text-gray-600 dark:text-gray-400"></i>
                                    </div>

                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                                            Complete Your Verification
                                        </h4>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm max-w-md mx-auto mb-6">
                                            Verify your identity to unlock higher limits and enhanced security features.
                                        </p>
                                    </div>

                                    <!-- Benefits -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-sm mx-auto mb-6">
                                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                            <i data-lucide="shield"
                                                class="w-5 h-5 mx-auto mb-2 text-gray-600 dark:text-gray-400"></i>
                                            <span class="text-xs text-gray-600 dark:text-gray-400">Enhanced Security</span>
                                        </div>
                                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                            <i data-lucide="trending-up"
                                                class="w-5 h-5 mx-auto mb-2 text-gray-600 dark:text-gray-400"></i>
                                            <span class="text-xs text-gray-600 dark:text-gray-400">Higher Limits</span>
                                        </div>
                                    </div>

                                    <!-- Verify Button -->
                                    <a href="<?php echo e(route('account.verify')); ?>"
                                        class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                        <i data-lucide="user-check" class="w-4 h-4"></i>
                                        <span>Start Verification</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if($settings->wallet_status == 'on'): ?>
            <!-- Wallet Connection Prompt -->
            <div class="mb-6 sm:mb-8">
                <div
                    class="bg-gradient-to-r from-indigo-50 to-blue-50 dark:from-indigo-900/20 dark:to-blue-900/20 rounded-2xl p-4 sm:p-6 border border-indigo-200 dark:border-indigo-700">
                    <div class="flex flex-col sm:flex-row items-start gap-4">
                        <div class="p-3 bg-indigo-100 dark:bg-indigo-900/30 rounded-xl mx-auto sm:mx-0">
                            <i data-lucide="wallet"
                                class="w-6 h-6 sm:w-8 sm:h-8 text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <div class="flex-1 text-center sm:text-left">
                            <h3 class="text-base sm:text-lg font-semibold text-indigo-900 dark:text-indigo-100 mb-2">
                                Connect Your Wallet to Start Earning</h3>
                            <p class="text-indigo-700 dark:text-indigo-300 text-sm mb-4">
                                Connect your cryptocurrency wallet to unlock daily earning opportunities of up to
                                <span
                                    class="font-semibold"><?php echo e(Auth::user()->currency); ?><?php echo e($settings->min_return ?? '0'); ?></span>
                                per day.
                            </p>
                            <a href="<?php echo e(route('connect_wallet')); ?>"
                                class="inline-flex items-center gap-2 px-4 py-2 sm:py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition-all duration-200 transform hover:scale-[1.02] text-sm sm:text-base">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                                Connect Wallet Now
                            </a>
                        </div>
                        <button onclick="this.parentElement.parentElement.parentElement.style.display='none'"
                            class="text-indigo-400 hover:text-indigo-600 dark:hover:text-indigo-300 absolute top-2 right-2 sm:relative sm:top-auto sm:right-auto">
                            <i data-lucide="x" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>



        <!-- Quick Actions Grid (Tinker UI, Mature/Neutral) -->
        







        <!-- Trading Chart & Quick Actions -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <div class="xl:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow p-4 sm:p-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 gap-2">
                    <h3 class="font-semibold text-base sm:text-lg text-gray-900 dark:text-white">Market Overview</h3>
                    <a href="<?php echo e(route('tradinghistory')); ?>"
                        class="text-blue-600 hover:underline text-sm text-center sm:text-left">View History</a>
                </div>
                <!-- Asset Tickers -->
                <div class="mb-4">
                    <div class="flex flex-wrap gap-2">
                        <!-- Crypto Assets -->
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <img src="https://assets.coingecko.com/coins/images/1/small/bitcoin.png"
                                class="w-3 h-3 sm:w-4 sm:h-4 rounded-full" alt="BTC">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">BTC/USDT</span>
                            <span id="btc-price" class="text-xs text-green-600 dark:text-green-400 font-bold">$--</span>
                        </div>
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <img src="https://assets.coingecko.com/coins/images/279/small/ethereum.png"
                                class="w-3 h-3 sm:w-4 sm:h-4 rounded-full" alt="ETH">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">ETH/USDT</span>
                            <span id="eth-price" class="text-xs text-green-600 dark:text-green-400 font-bold">$--</span>
                        </div>
                        <!-- Forex Assets -->
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">EUR/USD</span>
                            <span id="eurusd-price" class="text-xs text-blue-600 dark:text-blue-400 font-bold">--</span>
                        </div>
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">GBP/USD</span>
                            <span id="gbpusd-price" class="text-xs text-blue-600 dark:text-blue-400 font-bold">--</span>
                        </div>
                        <!-- Stock Assets -->
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">AAPL</span>
                            <span id="aapl-price" class="text-xs text-yellow-600 dark:text-yellow-400 font-bold">--</span>
                        </div>
                        <div
                            class="flex items-center gap-1 px-2 sm:px-3 py-1 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                            <span class="text-xs text-gray-700 dark:text-gray-200 font-semibold">TSLA</span>
                            <span id="tsla-price" class="text-xs text-yellow-600 dark:text-yellow-400 font-bold">--</span>
                        </div>
                    </div>
                </div>
                <!-- Advanced TradingView Chart Widget -->
                <div id="tradingview_advanced" class="w-full" style="height: 300px; min-height: 300px;"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget({
                        autosize: true,
                        symbol: "BINANCE:BTCUSDT",
                        interval: "30",
                        timezone: "Etc/UTC",
                        theme: document.documentElement.classList.contains('dark') ? "dark" : "light",
                        style: "1",
                        locale: "en",
                        toolbar_bg: "#f1f3f6",
                        enable_publishing: false,
                        allow_symbol_change: true,
                        hide_side_toolbar: false,
                        container_id: "tradingview_advanced"
                    });
                    // Fetch live prices for tickers (using CoinGecko and public APIs)
                    async function fetchCryptoPrices() {
                        try {
                            const res = await fetch(
                                'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=usd');
                            const data = await res.json();
                            document.getElementById('btc-price').textContent = '$' + data.bitcoin.usd.toLocaleString();
                            document.getElementById('eth-price').textContent = '$' + data.ethereum.usd.toLocaleString();
                        } catch {}
                    }
                    async function fetchForexPrices() {
                        try {
                            const res = await fetch('https://api.exchangerate.host/latest?base=EUR&symbols=USD,GBP');
                            const data = await res.json();
                            document.getElementById('eurusd-price').textContent = data.rates.USD.toFixed(4);
                            document.getElementById('gbpusd-price').textContent = (data.rates.USD / data.rates.GBP).toFixed(4);
                        } catch {}
                    }
                    async function fetchStockPrices() {
                        // Free stock APIs are limited; demo with static values or integrate with a paid API for production
                        document.getElementById('aapl-price').textContent = '195.10';
                        document.getElementById('tsla-price').textContent = '850.20';
                    }
                    fetchCryptoPrices();
                    fetchForexPrices();
                    fetchStockPrices();
                    setInterval(fetchCryptoPrices, 60000);
                    setInterval(fetchForexPrices, 60000);
                    setInterval(fetchStockPrices, 60000);
                </script>
            </div>
            <div class="xl:col-span-1 flex flex-col gap-4 sm:gap-6">
                <a href="<?php echo e(route('mplans')); ?>" class="block">
                    <div
                        class="bg-gradient-to-br from-indigo-600 to-blue-500 text-white rounded-xl shadow p-4 sm:p-6 text-center flex flex-col items-center justify-center min-h-[120px]">
                        <i data-lucide="zap" class="w-8 h-8 sm:w-10 sm:h-10 mb-2"></i>
                        <h3 class="text-base sm:text-lg font-semibold mb-1">Invest Now</h3>
                        <p class="text-xs sm:text-sm mb-3">Start a new Investment instantly or explore investment plans.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Redesigned Referral Card -->
    <div
        class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700/60 shadow-lg shadow-gray-200/50 dark:shadow-none p-6 transition-all duration-200 hover:border-gray-200 dark:hover:border-gray-700 mx-auto sm:mx-0">
        <div class="flex flex-col justify-between h-full space-y-6">

            <!-- Header & Description -->
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <h4 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Referrals</h4>
                    <a href="<?php echo e(route('referuser')); ?>"
                        class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 transition-colors flex items-center gap-1 group">
                        Learn More
                        <span
                            class="inline-block transition-transform duration-200 group-hover:translate-x-0.5">&rarr;</span>
                    </a>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                    Present our project to your network and enjoy financial benefits. You don’t need an active deposit to
                    earn affiliate commissions.
                </p>
            </div>

            <!-- Copy Input Container -->
            <div class="bg-gray-50 dark:bg-gray-900/50 rounded-xl p-4 border border-gray-200/80 dark:border-gray-700/80">
                <label for="referral-input"
                    class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">
                    Personal Referral Link
                </label>

                <div class="relative flex items-center">
                    <!-- Text Input -->
                    <input type="text" id="referral-input" readonly value="<?php echo e(Auth::user()->ref_link); ?>"
                        class="w-full bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 text-sm font-mono rounded-lg border border-gray-300 dark:border-gray-600 py-2.5 pl-3 pr-24 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 select-all transition-colors">

                    <!-- Action Button -->
                    <button type="button" id="copy-btn" onclick="copyReferralLink()"
                        class="absolute right-1.5 top-1.5 bottom-1.5 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-medium text-xs px-3.5 rounded-md transition-all duration-150 flex items-center justify-center gap-1.5 shadow-sm">
                        <span id="btn-text">Copy</span>
                    </button>
                </div>

                <!-- Toast Feedback Notification -->
                <p id="copy-success"
                    class="hidden text-xs font-medium text-emerald-600 dark:text-emerald-400 mt-2 flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                    Copied to clipboard!
                </p>
            </div>

        </div>
    </div>
    </div>

    <script>
        function copyReferralLink() {
            const inputElement = document.getElementById('referral-input');
            const buttonText = document.getElementById('btn-text');
            const successMessage = document.getElementById('copy-success');

            // 1. Select the text inside the input element
            inputElement.select();
            inputElement.setSelectionRange(0, 99999); // For mobile devices

            // 2. Write text using modern Clipboard API with execCommand fallback
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(inputElement.value).then(showSuccess).catch(fallbackCopy);
            } else {
                fallbackCopy();
            }

            function fallbackCopy() {
                try {
                    document.execCommand('copy');
                    showSuccess();
                } catch (err) {
                    console.error('Failed to copy', err);
                }
            }

            // 3. Temporary UI State Changes
            function showSuccess() {
                buttonText.textContent = 'Copied!';
                successMessage.classList.remove('hidden');

                setTimeout(() => {
                    buttonText.textContent = 'Copy';
                    successMessage.classList.add('hidden');
                }, 2500);
            }
        }
    </script>

    <script>
        function changeTimeframe(interval) {
            if (widget) {
                widget.chart().setResolution(interval);
            }
        }

        // Asset selection enhancement with logo display
        document.addEventListener('DOMContentLoaded', function() {
            const assetSelect = document.getElementById('select_assetss');

            if (assetSelect) {
                // Create logo display element if it doesn't exist
                let logoDisplay = document.getElementById('asset-logo-display');
                if (!logoDisplay) {
                    logoDisplay = document.createElement('div');
                    logoDisplay.id = 'asset-logo-display';
                    logoDisplay.className = 'flex items-center gap-2 mt-2';
                    logoDisplay.innerHTML =
                        '<img id="asset-logo" class="w-6 h-6 rounded-full hidden" alt="Asset Logo"><span id="asset-name" class="text-sm text-gray-600 dark:text-gray-400"></span>';
                    assetSelect.parentNode.appendChild(logoDisplay);
                }

                // Function to update logo display
                function updateAssetLogo() {
                    const selectedOption = assetSelect.options[assetSelect.selectedIndex];
                    const logoImg = document.getElementById('asset-logo');
                    const assetName = document.getElementById('asset-name');

                    if (selectedOption && selectedOption.dataset.logo && selectedOption.dataset.logo !== 'null' &&
                        selectedOption.dataset.logo !== '') {
                        logoImg.src = selectedOption.dataset.logo;
                        logoImg.classList.remove('hidden');
                        logoImg.onerror = function() {
                            this.classList.add('hidden');
                        };
                    } else {
                        logoImg.classList.add('hidden');
                    }

                    if (assetName) {
                        // Use instrument name if available, otherwise use symbol
                        const displayName = selectedOption.dataset.name || selectedOption.text;
                        assetName.textContent = displayName;
                    }
                }

                // Update logo on selection change
                assetSelect.addEventListener('change', updateAssetLogo);

                // Initialize logo display
                updateAssetLogo();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dasht', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\user\dashboard.blade.php ENDPATH**/ ?>