<?php $__env->startComponent('mail::message'); ?>
# Investment Plan Completed

Dear <?php echo e($name); ?>,

Your investment in the **<?php echo e($planName); ?>** plan has been completed successfully.

## Investment Details
- **Investment Amount:** <?php echo e($currency); ?><?php echo e(number_format($amount, 2)); ?>

- **Total Profit Earned:** <?php echo e($currency); ?><?php echo e(number_format($profit, 2)); ?>

- **Total Return:** <?php echo e($currency); ?><?php echo e(number_format($totalReturn, 2)); ?>

- **Start Date:** <?php echo e($startDate); ?>

- **End Date:** <?php echo e($endDate); ?>


<?php if($profit > 0): ?>
Congratulations on your successful investment! The profits have been credited to your account balance.
<?php else: ?>
Your investment has been completed. Please check your account for the latest balance.
<?php endif; ?>

You can invest in another plan or withdraw your funds from your account dashboard.

<?php $__env->startComponent('mail::button', ['url' => $siteUrl . '/login']); ?>
Login to Account
<?php echo $__env->renderComponent(); ?>

Thank you for choosing <?php echo e($siteName); ?> for your investment needs.

Regards,<br>
<?php echo e($siteName); ?> Team
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\emails\plans\completed.blade.php ENDPATH**/ ?>