<?php $__env->startSection('title', 'Cart'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">My Cart</h4>
        <form class="d-flex justify-content-end mb-2" action="<?php echo e(route('checkOut')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <p class="mb-0 mt-1 "><b>Total Price :</b> Rp<?php echo e(number_format($totalPrice)); ?></p>
            <button type="submit"
                class="badge text-bg-success d-flex align-self-center text-decoration-none p-2 px-3 fw-normal ms-3">Check Out
                (<?php echo e($totalQuantity); ?>)</button>
        </form>

        <div class="row justify-content-center mb-5">
            <?php $__currentLoopData = $carts->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-4 col-md-3 my-3 mt-4">
                    <div class="card background border-0 rounded-4 p-2">
                        <div class="d-flex justify-content-center m-2 p-1 bg-white rounded-4">
                            <img class="img-fluid cloth-image rounded-4"src="<?php echo e(asset('/storage/images/' . $product->image)); ?>"
                                alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="card-text mb-0">Rp<?php echo e(number_format($product->price)); ?></p>
                            <p class="card-text">Quantity : <?php echo e($product->pivot->quantity); ?></p>
                            <a href="<?php echo e(route('editPage', $product->id)); ?>" class="btn btn-primary">Edit Cart</a>
                            <form action="<?php echo e(route('deleteCart', $product->id)); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger my-3 text-bg-danger text-start"
                                    value="delete">Remove
                                    from
                                    Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/cart.blade.php ENDPATH**/ ?>