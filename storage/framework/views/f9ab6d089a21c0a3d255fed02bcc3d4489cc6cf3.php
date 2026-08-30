<?php $__env->startSection('title', 'Investment Plans'); ?>

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
                <h4 class="card-title">Investment Plans</h4>
                <div>
                    <a href="<?php echo e(route('admin.plans.categories')); ?>" class="btn btn-primary btn-sm mr-1">
                        <i class="fa fa-layer-group"></i> Plan Categories
                    </a>
                    <a href="<?php echo e(route('admin.plans.create')); ?>" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add New Plan
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price Range</th>
                                <th>ROI</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($plan->icon): ?>
                                    <img src="<?php echo e(asset('storage/' . $plan->icon)); ?>" alt="<?php echo e($plan->name); ?>" style="width: 30px; height: 30px; margin-right: 5px;">
                                    <?php endif; ?>
                                    <?php echo e($plan->name); ?>

                                </td>
                                <td><?php echo e($plan->category ? $plan->category->name : 'No Category'); ?></td>
                                <td><?php echo e($settings->currency); ?><?php echo e(number_format($plan->min_amount, 2)); ?> - <?php echo e($settings->currency); ?><?php echo e(number_format($plan->max_amount, 2)); ?></td>
                                <td><?php echo e($plan->roi_percentage); ?>% per <?php echo e($plan->roi_interval); ?></td>
                                <td><?php echo e($plan->duration); ?> <?php echo e($plan->duration_unit); ?></td>
                                <td>
                                    <form action="<?php echo e(route('admin.plans.toggle', $plan)); ?>" method="POST" style="display:inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm <?php echo e($plan->is_active ? 'btn-success' : 'btn-danger'); ?>">
                                            <?php echo e($plan->is_active ? 'Active' : 'Inactive'); ?>

                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <?php echo $plan->is_featured ? '<span class="badge bg-success"><i class="fa fa-star"></i> Featured</span>' : '<span class="badge bg-secondary">No</span>'; ?>

                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo e(route('admin.plans.edit', $plan)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="<?php echo e(route('admin.plans.destroy', $plan)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this plan?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
            "order": [[ 0, "asc" ]],
            "pageLength": 25
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\Plans\index.blade.php ENDPATH**/ ?>