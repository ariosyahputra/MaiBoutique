<?php $__env->startSection('title', 'History'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-lg home d-flex flex-column">
        <h4 class="text-center my-4">Check What You've Bought</h4>
        <div class="row justify-content-center mb-5">
            <?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-11 col-sm-7 col-md-5 col-lg-4 col-xxl-3 m-3 py-2 background rounded-3 d-flex flex-column">
                    <p class=" date rounded-3 col-4 py-1 text-center mt-2 ms-2"><?php echo e($history->transaction_date->format('d-m-Y')); ?></p>
                    <div class="border-0 rounded-4 px-2">
                        <?php
                            $totalPrice = 0;
                        ?>
                        <?php $__currentLoopData = $history->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $totalPrice += (int) ($product->pivot->quantity * $product->price);
                            ?>
                            <p>&#x2022 <?php echo e($product->pivot->quantity); ?>pc(s) <b><?php echo e($product->name); ?></b>
                                Rp<?php echo e(number_format($product->price)); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <p class="ms-2 mt-auto mb-2"><b>Total : </b> Rp<?php echo e(number_format($totalPrice)); ?> </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/history.blade.php ENDPATH**/ ?>