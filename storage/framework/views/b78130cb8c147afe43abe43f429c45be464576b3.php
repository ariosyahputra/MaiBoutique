<?php $__env->startSection('title', 'Sign In'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center my-5">
        <div class="col-9 col-sm-7 col-md-5 col-lg-4 col-xl-3 p-4 rounded-3 d-flex flex-column form-sign-in">
            <form enctype="multipart/form-data" action="<?php echo e(route('signIn')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h4 class="mt-3 mb-4 fw-semibold text-center">Sign in</h4>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded-3 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="floatingInput" placeholder="name@example.com" autofocus value=<?php echo e(old('email')); ?>>
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
                        id="floatingPassword" placeholder="Password" value=<?php echo e(old('password')); ?>>
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
                            <input class="me-1" name="rememberMe" type="checkbox" value="remember-me">
                            <label>Remember me</label>
                        </div>
                    </div>

                    <div class="forgot-pass">
                        <a class="text-decoration-none" href="">Lupa Password?</a>
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="w-75 btn btn-primary mt-5 rounded-3">Login</a>
                </div>

                <div class="mt-1 mb-3 to-register text-center">
                    <label>Not register Yet?</label>
                    <a href="/signUp">Register</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/SignIn.blade.php ENDPATH**/ ?>