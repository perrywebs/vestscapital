<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
} else {
    $text = 'light';
}
?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1  d-inline"> <?php echo e($user->name); ?> Clients Trades</h1>
                    <div class="d-inline">
                        <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('viewuser', $user->id)); ?>"> <i
                                    class="fa fa-arrow-left"></i> back</a>
                        </div>
                    </div>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="mb-5 row">
                    <div class="col card p-3 shadow ">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <span style="margin:3px;">
                                <div class="table-responsive">
                                    <table id="ShipTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Investor</th>
                                                <th>Plan</th>
                                                <th>Amount</th>
                                                <th>Min Return</th>
                                                <th>Max Return</th>
                                                <th>Profit</th>
                                                <th>Status</th>
                                                <th>Duration</th>
                                                <th>Activated</th>
                                                <th>Expire At</th>
                                                <th>Last Growth</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $investments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $plan = App\Models\Plans::where('id', $investment->plan)->first();
                                                    $userModel = App\Models\User::where(
                                                        'id',
                                                        $investment->user,
                                                    )->first();

                                                    $amount = (float) $investment->amount;

                                                    $minRate = $plan ? (float) $plan->minr : 0;
                                                    $maxRate = $plan ? (float) $plan->maxr : 0;

                                                    $minReturn = $amount * ($minRate / 100);
                                                    $maxReturn = $amount * ($maxRate / 100);
                                                ?>

                                                <tr>

                                                    
                                                    <td>
                                                        <?php if($userModel): ?>
                                                            <strong>
                                                                <?php echo e($userModel->name); ?>

                                                            </strong>

                                                            <?php if(!empty($userModel->email)): ?>
                                                                <br>
                                                                <small class="text-muted">
                                                                    <?php echo e($userModel->email); ?>

                                                                </small>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span class="text-muted">
                                                                Unknown User
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($plan): ?>
                                                            <strong><?php echo e($plan->name); ?></strong>

                                                            <?php if(!empty($plan->type)): ?>
                                                                <br>

                                                                <?php if($plan->type == 'Buy'): ?>
                                                                    <span class="badge badge-success">
                                                                        <?php echo e($plan->type); ?>

                                                                    </span>
                                                                <?php else: ?>
                                                                    <span class="badge badge-danger">
                                                                        <?php echo e($plan->type); ?>

                                                                    </span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span class="badge badge-secondary">
                                                                Plan Deleted
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <strong>
                                                            <?php echo e($user->currency); ?><?php echo e(number_format($amount, 2)); ?>

                                                        </strong>
                                                    </td>

                                                    
                                                    <td>
                                                        <span class="badge badge-info">
                                                            <?php echo e($minRate); ?>%
                                                        </span>
                                                    </td>

                                                    
                                                    <td>
                                                        <span class="badge badge-success">
                                                            <?php echo e($maxRate); ?>%
                                                        </span>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if((float) $investment->profit_earned > 0): ?>
                                                            <span class="badge badge-success">
                                                                +<?php echo e($user->currency); ?><?php echo e(number_format((float) $investment->profit_earned, 2)); ?>

                                                            </span>
                                                        <?php elseif((float) $investment->profit_earned < 0): ?>
                                                            <span class="badge badge-danger">
                                                                <?php echo e($user->currency); ?><?php echo e(number_format((float) $investment->profit_earned, 2)); ?>

                                                            </span>
                                                        <?php else: ?>
                                                            <span class="badge badge-secondary">
                                                                <?php echo e($user->currency); ?>0.00
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($investment->active == 'yes'): ?>
                                                            <span class="badge badge-success">
                                                                Active
                                                            </span>
                                                        <?php else: ?>
                                                            <span class="badge badge-danger">
                                                                Inactive
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php echo e($investment->inv_duration); ?>

                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($investment->activated_at): ?>
                                                            <?php echo e(\Carbon\Carbon::parse($investment->activated_at)->toDayDateTimeString()); ?>

                                                        <?php else: ?>
                                                            <span class="text-muted">
                                                                Not activated
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($investment->expire_date): ?>
                                                            <?php echo e(\Carbon\Carbon::parse($investment->expire_date)->toDayDateTimeString()); ?>


                                                            <?php if(now()->greaterThan(\Carbon\Carbon::parse($investment->expire_date))): ?>
                                                                <br>
                                                                <span class="badge badge-danger">
                                                                    Expired
                                                                </span>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span class="text-muted">
                                                                —
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($investment->last_growth): ?>
                                                            <?php echo e(\Carbon\Carbon::parse($investment->last_growth)->toDayDateTimeString()); ?>

                                                        <?php else: ?>
                                                            <span class="text-muted">
                                                                —
                                                            </span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                    <td>
                                                        <?php if($investment->active == 'yes'): ?>
                                                            
                                                            <div class="mb-2" style="min-width: 220px;">

                                                                <div class="input-group input-group-sm mb-2">
                                                                    <span class="input-group-text">
                                                                        <?php echo e($user->currency); ?>

                                                                    </span>

                                                                    <input type="number" step="0.01" min="0"
                                                                        class="form-control"
                                                                        id="result_amount_<?php echo e($investment->id); ?>"
                                                                        placeholder="Enter amount">
                                                                </div>

                                                                <div class="d-flex">

                                                                    <button type="button"
                                                                        class="btn btn-success btn-sm mr-1 mx-1"
                                                                        onclick="submitTradeResult(
                                                                            <?php echo e($investment->id); ?>,
                                                                            'profit',
                                                                            '<?php echo e(route('markprofit', $investment->id)); ?>'
                                                                        )">
                                                                        <i class="fa fa-plus"></i> Profit
                                                                    </button>

                                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                                        onclick="submitTradeResult(
                                                                            <?php echo e($investment->id); ?>,
                                                                            'loss',
                                                                            '<?php echo e(route('markloss', $investment->id)); ?>'
                                                                        )">
                                                                        <i class="fa fa-minus"></i> Loss
                                                                    </button>

                                                                </div>

                                                            </div>

                                                            <a href="<?php echo e(route('markas', [
                                                                'id' => $investment->id,
                                                                'status' => 'expired',
                                                            ])); ?>"
                                                                class="m-1 btn btn-warning btn-sm">
                                                                Mark as expired
                                                            </a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('markas', [
                                                                'id' => $investment->id,
                                                                'status' => 'yes',
                                                            ])); ?>"
                                                                class="m-1 btn btn-success btn-sm">
                                                                Mark as active
                                                            </a>
                                                        <?php endif; ?>

                                                        <a href="<?php echo e(route('deleteplan', $investment->id)); ?>"
                                                            class="m-1 btn btn-info btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this investment?')">
                                                            Delete
                                                        </a>
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
        </div>
        <script>
            function submitTradeResult(id, type, url) {

                const input = document.getElementById('result_amount_' + id);
                const amount = parseFloat(input.value);

                if (!amount || amount <= 0) {
                    alert('Please enter a valid amount.');
                    input.focus();
                    return;
                }

                let message = type === 'profit' ?
                    'Mark this trade with a profit of ' + amount + '?' :
                    'Mark this trade with a loss of ' + amount + '?';

                if (!confirm(message)) {
                    return;
                }

                window.location.href = url + '?amount=' + encodeURIComponent(amount);
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views/admin/Users/user_plans.blade.php ENDPATH**/ ?>