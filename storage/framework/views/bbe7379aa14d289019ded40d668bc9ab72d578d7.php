<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-9 col-sm-7 col-md-5 col-lg-4 p-4 rounded-3 d-flex flex-column form-sign-in">
                <form enctype="multipart/form-data" action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <h4 class="mt-3 mb-4 fw-semibold text-center">Login</h4>

                    <?php $__errorArgs = ['failed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger d-flex alert-dismissible fade show">
                            <i data-feather="alert-triangle"style="margin-right: 0.5em; width: 1.5em"></i>
                            <?php echo e($message); ?>

                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                aria-label="close"></button>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control rounded-3 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingInput"
                            placeholder="Email" autofocus value="<?php echo e(Cookie::get('emailCookie') !== null ? Cookie::get('emailCookie') : old('email')); ?>">
                        <label for="floatingInput">Email address</label>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-3 password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="floatingPassword" placeholder="Password" value="<?php echo e(Cookie::get('passwordCookie') !== null ? Cookie::get('passwordCookie') : ""); ?>">
                        <label for="floatingPassword">Password</label>

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="d-flex justify-content-between remember-forgot">
                        <div class="checkbox mb-3">
                            <div class="remember-me d-flex">
                                <input class="me-1" name="remember" type="checkbox" <?php if(Cookie::get('passwordCookie') !== null && Cookie::get('emailCookie') !== null): ?> checked <?php endif; ?>>
                                <label>Remember me</label>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 d-flex justify-content-center">
                        <button type="submit" class="w-75 btn btn-primary mt-5 rounded-3">Login</a>
                    </div>

                    <div class="mt-1 mb-3 to-register text-center">
                        <label>Not register Yet?</label>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.landingTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/login.blade.php ENDPATH**/ ?>