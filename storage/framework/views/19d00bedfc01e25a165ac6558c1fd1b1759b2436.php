<?php $__env->startSection('content'); ?>
     <form action="/home" method="get">
        <?php echo csrf_field(); ?>
         <div class="row justify-content-center">
            <div class="col-md-5 border border-dark p-4">
                <div class="h4 text-center text-muted mb-3">Login</div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="w-100 btn btn-primary mt-3">Submit</button>
        </form>
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mike\Desktop\project\resources\views/register.blade.php ENDPATH**/ ?>