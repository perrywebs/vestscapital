
<?php $__env->startComponent('mail::message'); ?>
#2FA code.

A temporary 2FA code request has been made using your account. <br>
Please authenticate using the following details:<br>
2FA code: <strong><?php echo $demo->message; ?></strong> <br>

Thanks,<br>
<?php echo e($demo->sender); ?>.
<?php echo $__env->renderComponent(); ?>

<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\emails\2fa.blade.php ENDPATH**/ ?>