<?php $__env->startSection('content'); ?>

    <div style="padding: 20px">


        <form action="<?php echo e(route('policy.store')); ?>" method="post" enctype="multipart/form-data">

            <?php echo e(csrf_field()); ?>

            
            
            
            

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Policy</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"  requried><?php echo e(old('content')); ?></textarea>
            </div>

            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" style="margin-top: 10px"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Corona Exclusion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="corona"  requried><?php echo e(old('corona')); ?></textarea>
            </div>
            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" style="margin-top: 10px"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Schedule</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="schedule" requried><?php echo e(old('schedule')); ?></textarea>
            </div>
            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" style="margin-top: 10px"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Signature</label>
                <input type="file" name="signature" class="form-control" value="<?php echo e(old('signature')); ?>" requried>
            </div>

            <?php $__errorArgs = ['signature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" style="margin-top: 10px"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/policy.blade.php ENDPATH**/ ?>