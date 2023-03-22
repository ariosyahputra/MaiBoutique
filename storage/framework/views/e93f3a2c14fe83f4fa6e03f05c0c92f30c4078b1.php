<nav class="navbar navbar-expand-md bg-white mt-3">
    <div class="container-lg">
        <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>">MaiBoutique</a>
        <button class="btn btn-outline-light ms-auto d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span data-feather="menu" class="text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link text-primary fw-semibold">Home</a>
                </li>
                <li class="nav-item"><a href="<?php echo e(route('searchProduct')); ?>"
                        class="nav-link text-primary fw-semibold">Search</a></li>

                <?php if(Auth::user()->role_id == 2): ?>
                    <li class="nav-item"><a href="<?php echo e(route('cart')); ?>"
                            class="nav-link text-primary fw-semibold">Cart</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('history')); ?>"
                            class="nav-link text-primary fw-semibold">History</a></li>
                <?php endif; ?>

                <li class="nav-item"><a href="<?php echo e(route('profile')); ?>"
                        class="nav-link text-primary fw-semibold">Profile</a></li>
                <li class="nav-item">
                    <?php if(Auth::user()->role_id == 1): ?>
                        <a class="btn btn-sm btn-primary d-flex justify-content-center d-md-none mb-2 rounded-3"
                            href="<?php echo e(route('addItem')); ?>">Add Item</a>
                    <?php endif; ?>
                </li>

                <?php if(Auth::check()): ?>
                    <li class="nav-item">
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-primary d-flex justify-content-center d-md-none w-100 rounded-3">
                                Logout
                            </button>
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto d-flex">
                <?php if(Auth::user()->role_id == 1): ?>
                    <a class="btn btn-sm btn-primary d-none d-md-flex me-3 rounded-3" href="<?php echo e(route('addItem')); ?>">
                        Add Item
                    </a>
                <?php endif; ?>
                <?php if(Auth::check()): ?>
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-primary d-none d-md-flex rounded-3">
                            Logout
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/partials/navbar.blade.php ENDPATH**/ ?>