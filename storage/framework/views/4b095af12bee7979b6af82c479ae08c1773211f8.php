<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-lg my-5">
        <div class="row justify-content-center mx-2">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 profile d-flex flex-column py-3 rounded-4">
                <div class="text-center mb-5">
                    <h5 class="mt-3"><?php echo e(Auth::user()->username); ?> Profile</h5>
                    <div class="row justify-content-center pt-1">
                        <p class="col-4 role my-2 mb-3 rounded-3"><?php echo e(Auth::user()->role->type); ?></p>
                    </div>
                    <p class="mb-0"><b>Username : </b><?php echo e(Auth::user()->username); ?></p>
                    <p class="mb-0"><b>Email Address : </b><?php echo e(Auth::user()->email); ?></p>
                    <p class="mb-0"><b>Phone : </b><?php echo e(Auth::user()->phone_number); ?></p>
                    <p class="mb-0"><b>Address : </b><?php echo e(Auth::user()->address); ?></p>
                </div>

                <div class="mt-auto">
                    <div class="d-flex justify-content-center">
                        <?php if(Auth::user()->role_id == 2): ?>
                            <a href="<?php echo e(route('editProfile')); ?>" class="btn btn-sm btn-outline-primary rounded-3 px-3">Edit Profile</a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('editPassword')); ?>" class="btn btn-sm btn-outline-primary rounded-3 ms-4 px-2">Edit Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/profile.blade.php ENDPATH**/ ?>