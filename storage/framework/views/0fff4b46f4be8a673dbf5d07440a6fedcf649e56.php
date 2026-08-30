<div>
    <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="list-group-item list-group-item-action <?php echo e(!$item->is_read ? 'bg-light' : ''); ?>">
            <div class="d-flex flex-column flex-grow-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo e($item->title); ?></h5>
                    <small class="text-muted"><?php echo e($item->created_at->diffForHumans()); ?></small>
                </div>
                <div class="d-flex flex-column">
                    <small class="text-secondary"><?php echo e($item->message); ?></small>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <?php if(!$item->is_read): ?>
                    <div>
                        <a href="" wire:click.prevent="markAsRead('<?php echo e($item->id); ?>')" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="Mark as read">
                            <i class="bi bi-eye fs-3"></i>
                        </a>
                    </div>
                    &nbsp; &nbsp;
                <?php endif; ?>
                <div>
                    <a href="" wire:click.prevent="deleteNotification('<?php echo e($item->id); ?>')"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete notification">
                        <i class="bi bi-trash fs-3 text-danger"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php if($loop->last): ?>
            <div class="text-center p-3">
                <a href="" wire:click.prevent="markAllAsRead" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Mark all as read">
                    <i class="bi bi-eye fs-3"></i>
                    Mark all as read
                </a>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="text-center py-5 mt-5">
            <i class="bi bi-bell-slash fs-1 text-secondary"></i>
            <p class="text-secondary">There are no new notifications</p>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\livewire\admin\notifications.blade.php ENDPATH**/ ?>