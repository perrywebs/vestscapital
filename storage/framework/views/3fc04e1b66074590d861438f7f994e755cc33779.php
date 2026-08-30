
<?php $__env->startComponent('mail::message'); ?>

# Welcome to <?php echo e($demo->sender); ?>!
Your registration is successful and we are really excited to welcome you to <?php echo e($demo->sender); ?> community! <br>

<p style="font-size:12px">Your system generated password: <strong><?php echo e($demo->password); ?></strong></p><br>
<p style="font-size:12px">Please do well to change this password to your prefered one.</p><br>

If you need any help, do not hesitate to reach out to us at <br> <?php echo e($demo->contact_email); ?> <br><br>

Kind regards,<br>
<?php echo e($demo->sender); ?>.
<?php echo $__env->renderComponent(); ?>


<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\emails\demotext.blade.php ENDPATH**/ ?>