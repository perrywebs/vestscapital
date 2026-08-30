<?php $__env->startSection('title', 'Plan Categories'); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-2">
    <?php echo $__env->make('admin.atlantis.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Category</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.plans.categories.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description (Optional)</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Add Category</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Plan Categories</h4>
                <a href="<?php echo e(route('admin.plans.index')); ?>" class="btn btn-primary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back to Plans
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Plans</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->name); ?></td>
                                <td><?php echo e($category->description ?: 'No description'); ?></td>
                                <td>
                                    <span class="badge bg-primary"><?php echo e($category->plans_count); ?></span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editCategoryModal<?php echo e($category->id); ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>

                                    <?php if($category->plans_count == 0): ?>
                                    <form action="<?php echo e(route('admin.plans.categories.destroy', $category)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>

                            <!-- Edit Category Modal -->
                            <div class="modal fade" id="editCategoryModal<?php echo e($category->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel<?php echo e($category->id); ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editCategoryModalLabel<?php echo e($category->id); ?>">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('admin.plans.categories.update', $category)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="edit_name<?php echo e($category->id); ?>">Category Name</label>
                                                    <input type="text" class="form-control" id="edit_name<?php echo e($category->id); ?>" name="name" value="<?php echo e($category->name); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="edit_description<?php echo e($category->id); ?>">Description</label>
                                                    <textarea class="form-control" id="edit_description<?php echo e($category->id); ?>" name="description" rows="3"><?php echo e($category->description); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\Plans\categories.blade.php ENDPATH**/ ?>