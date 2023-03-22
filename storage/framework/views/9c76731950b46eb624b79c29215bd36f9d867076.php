<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">Find Your Best Clothes Here!</h4>
        <div class="row justify-content-center mb-5">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-4 col-md-3 my-3">
                    <div class="card background border-0 rounded-4 p-2">
                        <div class="d-flex justify-content-center m-2 p-1 bg-white rounded-4">
                            <img class="img-fluid cloth-image rounded-4"src="<?php echo e(asset('/storage/images/' . $product->image)); ?>" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="card-text">Rp<?php echo e(number_format($product->price)); ?></p>
                            <a href="<?php echo e(route('detailProduct', $product->id)); ?>" class="btn btn-primary">More Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mx-3 mb-4 mt-auto d-flex justify-content-center">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\MaiBoutique\MaiBoutique\resources\views/home.blade.php ENDPATH**/ ?>