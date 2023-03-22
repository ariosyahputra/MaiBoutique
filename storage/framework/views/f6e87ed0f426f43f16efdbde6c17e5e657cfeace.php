<nav class="navbar navbar-expand-md bg-white">
    <div class="container-lg">
        <div class="navbar-brand fw-bold" href="#">MaiBoutique</div>
        <button class="btn btn-sm btn-outline-light ms-auto d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span data-feather="menu" class="text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="/home" class="nav-link text-primary fw-semibold">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-primary fw-semibold">Search</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-primary fw-semibold">Cart</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-primary fw-semibold">History</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-primary fw-semibold">Profile</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <a class="btn btn-sm btn-primary d-none d-md-flex" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/navbar.blade.php ENDPATH**/ ?>