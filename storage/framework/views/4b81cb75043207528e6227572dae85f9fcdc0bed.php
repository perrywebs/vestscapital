<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <?php echo csrf_field(); ?>

            <div class=" form-row">
                <div class="form-group col-md-12">
                    <div class="">
                        <h5 class="">Choose social login to use</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" name="social" id="both" value="both"
                                    class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Both</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="social" id="facebook" value="facebook"
                                    class="selectgroup-input">
                                <span class="selectgroup-button">Facebook</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="social" id="google" value="google"
                                    class="selectgroup-input">
                                <span class="selectgroup-button">Google</span>
                            </label>

                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6 facebook">
                    <h5 class="">App ID</h5>
                    <input type="email" name="site_name" class="form-control  " value="<?php echo e($settings->site_name); ?>"
                        required>
                    <small> From developer.facebook.com</small>
                </div>
                <div class="form-group col-md-6 facebook">
                    <h5 class="">App Secret</h5>
                    <input type="text" name="site_name" class="form-control  " value="<?php echo e($settings->site_name); ?>"
                        required>
                    <small> From developer.facebook.com</small>
                </div>
                <div class="form-group col-md-6 facebook">
                    <h5 class="">Redirect URL</h5>
                    <input type="text" name="site_name" class="form-control  " value="<?php echo e($settings->site_name); ?>"
                        required>
                    <small>Set this to your Valid OAuth Redirect URI in developers.facebook.com</small>
                </div>

                <div class="form-group col-md-12">
                    <button type="submit" class="px-4 btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\admin\Settings\AppSettings\social.blade.php ENDPATH**/ ?>