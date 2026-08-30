<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.trading-payment', [])->html();
} elseif ($_instance->childHasBeenRendered('pOwfBbw')) {
    $componentId = $_instance->getRenderedChildComponentId('pOwfBbw');
    $componentTag = $_instance->getRenderedChildComponentTagName('pOwfBbw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pOwfBbw');
} else {
    $response = \Livewire\Livewire::mount('admin.trading-payment', []);
    $html = $response->html();
    $_instance->logRenderedChild('pOwfBbw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\subscription\payment.blade.php ENDPATH**/ ?>