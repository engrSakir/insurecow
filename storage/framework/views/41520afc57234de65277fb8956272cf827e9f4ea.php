<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            <h2 class="text-center mt-5 mb-5"><b>Your cattle added successfully.</b></h2>
            <a href="<?php echo e(route('onboard.index')); ?>" class="btn text-white" style="background: #082E13">Complete Registration</a>
            <a href="<?php echo e(route('reg_two.index')); ?>" class="btn float-end" style="color: #082E13;background: #d9d9d9"><i class="fas fa-plus-circle"></i> Add Another Cattle</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/confirmation.blade.php ENDPATH**/ ?>