<nav class="navbar navbar-light bg-white fw-bold mt-3">
    <div class="container-lg">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand">MaiBoutique</a>
        <div class="ms-auto">
            <?php if(auth()->guard()->guest()): ?>
                <?php if(Request::is('/') && !Auth::check()): ?>
                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
                <?php endif; ?>

                <?php if(Request::is('login')): ?>
                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('register')); ?>">Register</a>
                <?php elseif(Request::is('register')): ?>
                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/partials/landingnavbar.blade.php ENDPATH**/ ?>