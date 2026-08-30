<?php $__env->startSection('title', 'User Investment Plans'); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/admin/plugins/datatables/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-2">
    <?php echo $__env->make('admin.atlantis.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">User Investment Plans</h4>
                <div>
                    <a href="<?php echo e(route('admin.plans.index')); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-list"></i> Manage Plans
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Filter Form -->
                <form action="<?php echo e(route('admin.user-plans.index')); ?>" method="GET" class="mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Filter by Status</label>
                                <select name="status" id="status" class="form-control" onchange="this.form.submit()">
                                    <option value="all" <?php echo e(request('status') == 'all' ? 'selected' : ''); ?>>All Statuses</option>
                                    <option value="pending" <?php echo e(request('status') == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                    <option value="active" <?php echo e(request('status') == 'active' ? 'selected' : ''); ?>>Active</option>
                                    <option value="completed" <?php echo e(request('status') == 'completed' ? 'selected' : ''); ?>>Completed</option>
                                    <option value="cancelled" <?php echo e(request('status') == 'cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="user_id">Filter by User ID</label>
                                <input type="number" class="form-control" id="user_id" name="user_id" value="<?php echo e(request('user_id')); ?>" placeholder="Enter User ID">
                            </div>
                        </div>
                        <div class="col-md-4 align-self-end">
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                            <a href="<?php echo e(route('admin.user-plans.index')); ?>" class="btn btn-secondary">Reset</a>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Plan</th>
                                <th>Amount</th>
                                <th>ROI</th>
                                <th>Total Paid</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $userPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($userPlan->id); ?></td>
                                <td>
                                    <?php if($userPlan->user): ?>
                                    <a href="<?php echo e(route('viewuser', $userPlan->user_id)); ?>" target="_blank">
                                        <?php echo e($userPlan->user->name); ?>

                                    </a>
                                    <?php else: ?>
                                    <span class="text-danger">User not found</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($userPlan->plan ? $userPlan->plan->name : 'N/A'); ?></td>
                                <td><?php echo e($settings->currency); ?><?php echo e(number_format($userPlan->amount, 2)); ?></td>
                                <td><?php echo e($userPlan->plan ? $userPlan->plan->roi_percentage : 0); ?>% per <?php echo e($userPlan->plan ? $userPlan->plan->roi_interval : 'N/A'); ?></td>
                                <td><?php echo e($settings->currency); ?><?php echo e(number_format($userPlan->total_paid_amount, 2)); ?></td>
                                <td>
                                    <?php if($userPlan->status == 'pending'): ?>
                                    <span class="badge bg-warning">Pending</span>
                                    <?php elseif($userPlan->status == 'active'): ?>
                                    <span class="badge bg-success">Active</span>
                                    <?php elseif($userPlan->status == 'completed'): ?>
                                    <span class="badge bg-info">Completed</span>
                                    <?php elseif($userPlan->status == 'cancelled'): ?>
                                    <span class="badge bg-danger">Cancelled</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($userPlan->created_at->format('Y-m-d H:i')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.user-plans.show', $userPlan)); ?>" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4 d-flex justify-content-center">
                    <?php echo e($userPlans->appends(request()->except('page'))->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/plugins/datatables/dataTables.bootstrap5.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            "order": [[ 0, "desc" ]],
            "pageLength": 50,
            "searching": false,
            "paging": false,
            "info": false
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\Plans\user-plans.blade.php ENDPATH**/ ?>