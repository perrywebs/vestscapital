<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('theme') === 'light' ? false : true }" :class="{ 'dark': darkMode }" class="dark bg-gray-300 h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($settings->site_name); ?> - <?php echo $__env->yieldContent('title', 'Secure Trading Platform'); ?></title>

    <!-- Favicon -->
    <link href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>" rel="icon" type="image/x-icon" />

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Set dark mode as default if no preference is stored
        if (!localStorage.getItem('theme')) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
        }

        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        'glass': 'rgba(255, 255, 255, 0.05)',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'gradient-y': 'gradient-y 15s ease infinite',
                        'gradient-xy': 'gradient-xy 15s ease infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'gradient-y': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'center top'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'center center'
                            }
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'gradient-xy': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'float': {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="temp/custom/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="temp/custom/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="temp/custom/js/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="temp/custom/js/bootstrap.min.js"></script>

    <link href="temp/custom/css/main.css" rel="stylesheet" />
    <!-- <link href="404.html" rel="stylesheet" /> -->

    <title><?php echo e($settings->site_name); ?></title>
    <link rel="manifest" href="temp/custom/js/manifest.json">
    <meta name="theme-color" content="#4D7DE6">
    <meta name="msapplication-navbutton-color" content="#4D7DE6">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4D7DE6">


    <meta name="theme-color" content="#4D7DE6">
    <meta name="msapplication-navbutton-color" content="#4D7DE6">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4D7DE6">

    <link href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>" rel="icon" type="image/x-icon" />
    <!-- <link rel="icon" sizes="192x192" href="404.html"> -->

    <meta name="keywords" content="<?php echo e($settings->site_name); ?>" />
    <meta property="og:image" content="temp/custom/images/icon/icon-310x310.png" />

    <meta name="msapplication-square310x310logo" content="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">
    <meta name="msapplication-square70x70logo" content="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">
    <meta name="msapplication-square150x150logo" content="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">
    <meta name="msapplication-wide310x150logo" content="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">

    <link rel="apple-touch-icon-precomposed" href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="57x57" href="404.html" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="404.html" /> -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>" />


    <meta property="og:site_name" content="<?php echo e($settings->site_name); ?>">
    <meta property="og:title" content="Trading With <?php echo e($settings->site_name); ?>" />
    <meta name="description"
        content="<?php echo e($settings->site_name); ?> LIMITED???
INVEST IN A LEADING
TRADE AND INVESTMENT
COMPANY, OPERATING IN
THE UK.
SERVICES INCLUDE: FOREX TRADING
CRYPTOCURRENCIES, STOCKS & COMMODITIES INVESTMENTS. OIL & GAS, REAL ESTATE INVESTMENTS, MARKET
RESEARCH AND ANALYSIS:
ASSISTING BOTH INDIVIDUALS & COMPANIES INVEST IN THE
COMMERCIAL MARKET.TRAINING CLIENTS & INVESTORS TO BECOME
EXPERTISE.???">
    <meta property="og:description"
        content="<?php echo e($settings->site_name); ?> LIMITED???
INVEST IN A LEADING
TRADE AND INVESTMENT
COMPANY, OPERATING IN
THE UK.
SERVICES INCLUDE: FOREX TRADING
CRYPTOCURRENCIES, STOCKS & COMMODITIES INVESTMENTS. OIL & GAS, REAL ESTATE INVESTMENTS, MARKET
RESEARCH AND ANALYSIS:
ASSISTING BOTH INDIVIDUALS & COMPANIES INVEST IN THE
COMMERCIAL MARKET.TRAINING CLIENTS & INVESTORS TO BECOME
EXPERTISE.???">
    <meta property="og:type" content="website" />


    <!-- <link href="404" rel="stylesheet" /> -->

</head>


<style>
    body {
        overflow-x: hidden;
    }

    [x-cloak] {
        display: none !important;
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    }

    .trading-card {
        background: rgba(17, 24, 39, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(75, 85, 99, 0.2);
        box-shadow:
            0 10px 25px -5px rgba(0, 0, 0, 0.3),
            0 20px 25px -5px rgba(0, 0, 0, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 0.05);
    }

    .light .trading-card {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(229, 231, 235, 0.3);
        box-shadow:
            0 10px 25px -5px rgba(0, 0, 0, 0.1),
            0 20px 25px -5px rgba(0, 0, 0, 0.04),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .step-indicator {
        position: relative;
        z-index: 1;
    }

    .step-indicator::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, rgba(79, 70, 229, 0.3) 50%, transparent 100%);
        transform: translateY(-50%);
        z-index: -1;
    }

    .skiptranslate {
        display: none !important;
    }

    body {
        top: 0 !important;
    }
</style>
</head>

<body class="h-full bg-gray-300 font-sans antialiased transition-colors duration-300 text-gray-900"
    x-data="{ darkMode: localStorage.theme === 'dark' || !localStorage.theme }" :class="{ 'dark': darkMode }" x-cloak>


    <!-- Main Content Wrapper -->
    <div class="relative min-h-screen overflow-hidden">
        <!-- Content -->
        <div class="relative z-10">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- Professional Trading Ticker -->
    <div
        class="fixed bottom-0 left-0 right-0 bg-white/80 dark:bg-gray-900/90 backdrop-blur-md border-t border-gray-200/50 dark:border-gray-700/50 z-40">
        <div class="tradingview-widget-container">
            <?php echo $__env->make('layouts.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <!-- Initialize Scripts -->
    <script>
        // Set dark mode as default if no preference is stored
        if (!localStorage.getItem('theme')) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
        }

        // Initialize theme
        document.addEventListener('alpine:init', () => {
            Alpine.store('theme', {
                init() {
                    // Default to dark if no preference is set
                    this.darkMode = localStorage.getItem('theme') === 'dark' || !localStorage.getItem(
                        'theme');
                    this.updateTheme();
                },
                darkMode: true, // Set default to true
                toggle() {
                    this.darkMode = !this.darkMode;
                    this.updateTheme();
                },
                updateTheme() {
                    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            });
        });

        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });

        // Re-initialize icons after Alpine updates
        document.addEventListener('alpine:updated', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
    <!-- Language Selector -->
    <?php echo $__env->make('layouts.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Language Selector -->
    <!--<?php echo $__env->make('layouts.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\layouts\guest1.blade.php ENDPATH**/ ?>