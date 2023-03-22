<?php $__env->startSection('title', 'Product detail'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-lg my-5">
        <div class="row justify-content-center mx-2">
            <div class="col col-lg-10 col-xl-9 col-xxl-8 p-4 product-detail rounded-4">
                <div class="row">
                    <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start">
                        <img class="img-fluid cloth-detail rounded-4"src="<?php echo e(asset('/storage/images/' . $product->image)); ?>"
                            alt="Card image cap">
                    </div>

                    <div class="col-12 col-sm col-md col-lg-5 ms-2 d-flex flex-column align-self-center">
                        <h4 class="mt-3 mb-0 m-sm-0 "><?php echo e($product->name); ?></h4>
                        <p>Rp<?php echo e(number_format($product->price)); ?></p>

                        <?php if(Auth::user()->role_id == 2): ?>
                            <form action="<?php echo e(route('addToCart', $product->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="d-flex">
                                    <label class="qty">Quantity : </label>
                                    <input type="text" name="quantity"
                                        class="form-control qty-placeholder ms-3 rounded-2 d-flex flex-column <?php if(!$errors->any()): ?> border-0 <?php endif; ?> <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-alert <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>
                                <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert-number">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <div class="d-flex mt-3">
                                    <button type="submit"
                                        class="badge text-bg-success d-flex align-self-center text-decoration-none p-2 px-3 fw-normal">Add
                                        To
                                        Cart</button>
                                    <a href="<?php echo e(route('home')); ?>"
                                        class="badge text-bg-primary d-flex align-self-center text-decoration-none p-2 px-4 fw-normal ms-2">Back</a>
                                </div>
                            </form>
                        <?php elseif(Auth::user()->role_id== 1): ?>
                            <form action="<?php echo e(route('deleteItem', $product->id)); ?>" method="POST">
                                <?php echo e(@method_field('DELETE')); ?>

                                <?php echo csrf_field(); ?>
                                <div class="d-flex mt-3">
                                    <a href="<?php echo e(route('home')); ?>"
                                        class="badge text-bg-primary d-flex align-self-center text-decoration-none p-2 px-4 fw-normal">Back
                                    </a>
                                    <button type="submit"
                                        class="badge text-bg-danger d-flex align-self-center text-decoration-none p-2 px-3 fw-normal ms-2">
                                        Delete Item
                                    </button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row text-break mt-4">
                    <div class="col-12 ms-2 ms-sm-0 mb-3">
                        <h6 class="m-0">Product Description</h6>
                        <p class="mt-1"><small><?php echo e($product->description); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\MaiBoutique\MaiBoutique\resources\views/productDetail.blade.php ENDPATH**/ ?>