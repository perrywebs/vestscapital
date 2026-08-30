<div>
 <?php if(Auth::user()->signal_status=='on'): ?>
  <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-group alert-danger alert-icon  fade show" role="alert">
                    <div class="alert-group-prepend">
                        <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-down"></i>
                        </span>
                    </div>
                    <div class="alert-content">
                        <p>You are required to buy <?php echo e(Auth::user()->user_signal); ?>. </p>
                        <p> <a href="<?php echo e(route('deposits')); ?>"  class='btn btn-warning'>Buy Now</a></p>
                    </div> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                    
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\components\alert.blade.php ENDPATH**/ ?>