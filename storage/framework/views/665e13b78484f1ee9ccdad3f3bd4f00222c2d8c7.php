<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-md-4">
            <h2 class="text-center mt-3"><b>Medical Info</b></h2>
            <form class="<?php echo e(route('save.write.medical.report')); ?>" method="post" enctype="multipart/form-data" id="writemedicalform">
                <?php echo e(csrf_field()); ?>

                <?php if($message = Session::get('success')): ?>
                <p class="p-welcome-text alert alert-success"><?php echo e($message); ?></p>
                <!-- <div class="alert alert-success alert-block">
                    <strong>Password must contain at least 1 letter, 1 number, and 1 symbol. Minimum length is 8 characters.</strong>
                </div> -->
                <?php endif; ?>
                <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="text" class="form-control" name="date" placeholder="01/12/2023" id="datepicker" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cattle_id">Select Cattle:</label>
                        <select name="cattle_id" class="form-control" name="cattle_id">
                            <option value="">SELECT CATTLE</option>
                            <?php $__currentLoopData = $cattle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cattle_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="disease_name">Enter Disease Name:</label>
                        <input type="text" class="form-control" name="disease_name" placeholder="Enter Disease Name">
                    </div>
                    <div class="form-group">
                        <label for="vaccine_name">Enter Vaccine Name:</label>
                        <input type="vaccine_name" class="form-control" name="vaccine_name" placeholder="Enter Vaccine Name">
                    </div>
                    <div class="form-group">
                        <label for="next_vaccination_date">Enter Next Vaccine Date:</label>
                        <input type="text" class="form-control" name="next_vaccination_date" placeholder="01/12/2023" id="datepicker2" readonly>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/write-medical-report.blade.php ENDPATH**/ ?>