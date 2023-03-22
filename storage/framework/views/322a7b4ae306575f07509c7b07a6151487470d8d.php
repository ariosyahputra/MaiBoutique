<?php $__env->startSection('title', 'Introduction'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-md">
    <div class="row mt-md-5 mt-0">
        <div class="col-12 col-md-5 align-self-center my-4">
            <h4 class="typeWritter">Welcome to MaiBoutique</h4>
            <p class="fs-6">Online boutique that provides you with various clothes to suit your various activities.</p>
            <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(route('login')); ?>">Get Started</a>
        </div>
        <div class="col-12 col-md-6 ms-md-auto">
            <img class="img-fluid" src="/images/landingImage.png" alt="">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\OneDrive\Desktop\project\resources\views/landing/landingPage.blade.php ENDPATH**/ ?>