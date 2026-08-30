<?php $__env->startSection('title', 'Edit Investment Plan'); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/admin/plugins/summernote/summernote-bs4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-2">
    <?php echo $__env->make('admin.atlantis.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Edit Investment Plan</h4>
                <a href="<?php echo e(route('admin.plans.index')); ?>" class="btn btn-primary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back to Plans
                </a>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.plans.update', $plan)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Plan Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $plan->name)); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category <span class="text-danger">*</span></label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="">Select Category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', $plan->category_id) == $category->id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="icon">Plan Icon</label>
                                <?php if($plan->icon): ?>
                                <div class="mb-2">
                                    <img src="<?php echo e(asset('storage/' . $plan->icon)); ?>" alt="<?php echo e($plan->name); ?>" style="max-width: 100px; max-height: 100px;">
                                </div>
                                <?php endif; ?>
                                <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                                <small class="text-muted">Recommended size: 64x64px. Leave empty to keep current icon.</small>
                            </div>

                            <div class="form-group">
                                <label for="min_amount">Minimum Investment <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo e($settings->currency); ?></span>
                                    </div>
                                    <input type="number" step="0.01" class="form-control" id="min_amount" name="min_amount" value="<?php echo e(old('min_amount', $plan->min_amount)); ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="max_amount">Maximum Investment <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo e($settings->currency); ?></span>
                                    </div>
                                    <input type="number" step="0.01" class="form-control" id="max_amount" name="max_amount" value="<?php echo e(old('max_amount', $plan->max_amount)); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="roi_percentage">ROI Percentage <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" step="0.01" class="form-control" id="roi_percentage" name="roi_percentage" value="<?php echo e(old('roi_percentage', $plan->roi_percentage)); ?>" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="roi_interval">ROI Interval <span class="text-danger">*</span></label>
                                <select class="form-control" id="roi_interval" name="roi_interval" required>
                                    <option value="hourly" <?php echo e(old('roi_interval', $plan->roi_interval) == 'hourly' ? 'selected' : ''); ?>>Hourly</option>
                                    <option value="daily" <?php echo e(old('roi_interval', $plan->roi_interval) == 'daily' ? 'selected' : ''); ?>>Daily</option>
                                    <option value="weekly" <?php echo e(old('roi_interval', $plan->roi_interval) == 'weekly' ? 'selected' : ''); ?>>Weekly</option>
                                    <option value="monthly" <?php echo e(old('roi_interval', $plan->roi_interval) == 'monthly' ? 'selected' : ''); ?>>Monthly</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="duration">Plan Duration <span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="duration" name="duration" value="<?php echo e(old('duration', $plan->duration)); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" id="duration_unit" name="duration_unit" required>
                                            <option value="hours" <?php echo e(old('duration_unit', $plan->duration_unit) == 'hours' ? 'selected' : ''); ?>>Hours</option>
                                            <option value="days" <?php echo e(old('duration_unit', $plan->duration_unit) == 'days' ? 'selected' : ''); ?>>Days</option>
                                            <option value="weeks" <?php echo e(old('duration_unit', $plan->duration_unit) == 'weeks' ? 'selected' : ''); ?>>Weeks</option>
                                            <option value="months" <?php echo e(old('duration_unit', $plan->duration_unit) == 'months' ? 'selected' : ''); ?>>Months</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" <?php echo e(old('is_active', $plan->is_active) ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="is_active">Active</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" <?php echo e(old('is_featured', $plan->is_featured) ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="is_featured">Featured Plan</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Plan Description <span class="text-danger">*</span></label>
                        <textarea class="form-control summernote" id="description" name="description" rows="6" required><?php echo e(old('description', $plan->description)); ?></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Update Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Plan Features Section -->
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Plan Features</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card bg-light">
                            <div class="card-header">Add New Feature</div>
                            <div class="card-body">
                                <form action="<?php echo e(route('admin.plans.features.store', $plan)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="feature_text">Feature Text <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="feature_text" name="feature_text" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="is_active_feature" name="is_active" checked>
                                            <label class="custom-control-label" for="is_active_feature">Active</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Feature</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Feature</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($features) > 0): ?>
                                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($feature->feature_text); ?></td>
                                            <td>
                                                <span class="badge <?php echo e($feature->is_active ? 'bg-success' : 'bg-danger'); ?>">
                                                    <?php echo e($feature->is_active ? 'Active' : 'Inactive'); ?>

                                                </span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editFeatureModal<?php echo e($feature->id); ?>">
                                                    <i class="fa fa-edit"></i>
                                                </button>

                                                <form action="<?php echo e(route('admin.plans.features.destroy', [$plan, $feature])); ?>" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this feature?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                                <!-- Edit Feature Modal -->
                                                <div class="modal fade" id="editFeatureModal<?php echo e($feature->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editFeatureModalLabel<?php echo e($feature->id); ?>" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editFeatureModalLabel<?php echo e($feature->id); ?>">Edit Feature</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?php echo e(route('admin.plans.features.update', [$plan, $feature])); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="edit_feature_text<?php echo e($feature->id); ?>">Feature Text</label>
                                                                        <input type="text" class="form-control" id="edit_feature_text<?php echo e($feature->id); ?>" name="feature_text" value="<?php echo e($feature->feature_text); ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="edit_is_active_feature<?php echo e($feature->id); ?>" name="is_active" <?php echo e($feature->is_active ? 'checked' : ''); ?>>
                                                                            <label class="custom-control-label" for="edit_is_active_feature<?php echo e($feature->id); ?>">Active</label>
                                                                        </div>
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
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3" class="text-center">No features added yet.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\Plans\edit.blade.php ENDPATH**/ ?>