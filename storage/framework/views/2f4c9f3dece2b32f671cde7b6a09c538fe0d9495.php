<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/css/fcss/homepage.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="mt-5 mb-4 p-4">

    <div class="row mt-5">
        <div class="d-lg-flex d-md-flex justify-content-center">

            <!--Cow Lists-->
            <?php if(auth()->user()->cattles()->count() == 0): ?>
            <div class="col-lg-8">
                <div>
                    <h1 class="p-greeting" style="font-weight: bold">Welcome Mr. <?php echo e(Auth::user()->name); ?> to InsureCow ! ! !</h1>
                    <p align="center">Here is some option for you.</p>
                    <center><a href="<?php echo e(route('reg_two.index')); ?>" class="btn w-50 text-white text-center mt-5" style="background-color: #0f6848">Register Your Cattle</a></center>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo e(asset('images/welcome.png')); ?>" alt="" class="img-fluid rounded">
            </div>
            <?php else: ?>

            <div class="col-lg-8">
                <div>
                    <h1 class="p-greeting" style="font-weight: bold">Welcome Mr. <?php echo e(Auth::user()->name); ?> to InsureCow ! ! !</h1>
                    <p align="center" class="mb-5">Here is some option for you.</p>
                    <center>
                        <a href="<?php echo e(route('farmer.registered.cattle')); ?>" class="btn w-50 text-center mt-4" style="background-color: #ffffff; border: 1px solid #226034;">View registered cattle</a>
                        <a href="<?php echo e(route('reg_one.index')); ?>" class="btn w-50 text-white text-center mt-2" style="background-color: #0f6848">Create new cattle</a>
                        <a href="<?php echo e(route('onboard.index')); ?>" class="btn w-50 text-white text-center mt-2" style="background-color: #0f6848">Create insurance for your cattle</a>
                    </center>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="<?php echo e(asset('images/welcome.png')); ?>" alt="" class="img-fluid rounded">
            </div>
            
            <?php endif; ?>

        </div>
    </div>



</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/home/index.blade.php ENDPATH**/ ?>