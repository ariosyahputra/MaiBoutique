<nav class="navbar navbar-light bg-white fw-bold">
    <div class="container-md">
        <a class="navbar-brand">MaiBoutique</a>
        <div class="ms-auto">
            <?php if(auth()->guard()->guest()): ?>
                <?php if(Request::is('/')): ?>
                    <?php if(Route::has('login')): ?>
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
                    <?php endif; ?>
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
<?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/landingnavbar.blade.php ENDPATH**/ ?>