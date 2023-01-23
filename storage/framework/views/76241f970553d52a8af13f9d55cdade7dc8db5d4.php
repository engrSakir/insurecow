<?php $__env->startSection('content'); ?>
<h2 align="center"> <img src="<?php echo e(asset('storage/' .$profile->image )); ?>" alt="">
</h2>
    <div style="padding: 20px">
        <?php echo $policy->content; ?>



    </div>
<h2 align="center">Coronavirus Exclusion</h2>

    <div style="padding: 20px">

        <?php echo $policy->corona; ?>



    </div>
<h2 align="center">Schedule</h2>

    <div style="padding: 20px">

        <?php echo $policy->schedule; ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/policy_view.blade.php ENDPATH**/ ?>