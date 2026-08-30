<?php $__env->startComponent('mail::message'); ?>

# New User Registration

A new user has successfully registered on **<?php echo e($settings->site_name); ?>**.

<?php $__env->startComponent('mail::panel'); ?>
**User Details**

- **Name:** <?php echo e($user->name); ?>

- **Email:** <?php echo e($user->email); ?>

- **Username:** <?php echo e($user->username); ?>

- **Registration Date:** <?php echo e($user->created_at->format('M d, Y h:i A')); ?>

<?php echo $__env->renderComponent(); ?>

You can view this user in the admin dashboard.

<?php $__env->startComponent('mail::button', ['url' => config('app.url').'/admin/users/' . $user->id]); ?>
View User Profile
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e($settings->site_name); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\emails\admin-new-registration.blade.php ENDPATH**/ ?>