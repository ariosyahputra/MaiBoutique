<?php $__env->startSection('content'); ?>
    <div class="container-lg">
        <h4 class="text-center my-4">Find Your Best Clothes Here!</h2>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-4 col-md-3 my-3">
                        <div class="card background">
                            <div class="d-flex justify-content-center m-2 bg-white rounded-4">
                                <img class="img-fluid cloth-image rounded-4"src="/images/test.png" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                <p class="card-text">Rp.<?php echo e(number_format($product->price)); ?></p>
                                <a href="/details/<?php echo e($product->id); ?>" class="btn btn-primary">More Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\Desktop\project\resources\views/home.blade.php ENDPATH**/ ?>