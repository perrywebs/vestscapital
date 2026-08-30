<?php $attributes = $attributes->exceptProps([
    'title' => '',
    'icon' => '',
    'value' => '',
    'color' => 'bg-white',
]); ?>
<?php foreach (array_filter(([
    'title' => '',
    'icon' => '',
    'value' => '',
    'color' => 'bg-white',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="rounded-2xl shadow-sm p-6 <?php echo e($color); ?> text-gray-900 dark:text-white transition">
    <div class="flex items-center justify-between">
        <div>
            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400"><?php echo e($title); ?></h4>
            <p class="text-2xl font-bold mt-1"><?php echo e($value); ?></p>
        </div>
        <div class="text-3xl text-primary-600 dark:text-primary-400">
            <?php echo $icon; ?>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\components\dashboard\card.blade.php ENDPATH**/ ?>