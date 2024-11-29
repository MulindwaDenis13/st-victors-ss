

<?php $__env->startSection('content'); ?>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
					
					<?php if(session()->has('message.added')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo e(__('Task Done!')); ?></strong> <?php echo session('message.content'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php endif; ?>
					
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                         <form class="md-float-material" method="POST" action="<?php echo e(route('admin.login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="text-center">
                                <img class="logo-dark" src="<?php echo e(asset('images/'.widget(1)->extra_image_1)); ?>" alt="">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary"><?php echo e(__('Sign In')); ?></h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                   
                                </div>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse"><?php echo e(__('Remember me')); ?></span>
                                            </label>
                                        </div>
                                    </div>
                                    <?php if(Route::has('admin.password.request')): ?>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="<?php echo e(route('admin.password.request')); ?>" class="text-right f-w-600 text-inverse"> <?php echo e(__('Forgot Your Password')); ?>?</a>
                                    </div>
                                   
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><?php echo e(__('Sign in')); ?></button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0"><?php echo e(__('Thank you and enjoy our website')); ?>.</p>
                                        <p class="text-inverse text-left"><b><?php echo e(__('Your Autentification Team')); ?></b></p>
                                    </div>
                                    <div class="col-md-2">
                                      
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pcu/Desktop/Projects/victorskitaasa/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>