<?php $__env->startSection('content'); ?>
    <div class="container-lg">
            <div class="">
                <h4><?php echo e($product->name); ?></h4>
                <p><?php echo e($product->price); ?></p>
                <input type="number">
                <h4>Product Description</h4>
                <p><?php echo e($product->detail); ?></p>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\Desktop\project\resources\views/productDetail.blade.php ENDPATH**/ ?>