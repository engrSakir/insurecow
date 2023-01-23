<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row" style="background: #D7ECCB; border: 1px solid #000000; border-radius: 10px;">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Upload Cattle Medical Report</b></h2>
            <?php if($message = Session::get('success')): ?>
                <p class="p-welcome-text alert alert-success"><?php echo e($message); ?></p>
                <!-- <div class="alert alert-success alert-block">
                    <strong>Password must contain at least 1 letter, 1 number, and 1 symbol. Minimum length is 8 characters.</strong>
                </div> -->
              <?php endif; ?>
              <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
              <form class="<?php echo e(route('save.medical.report')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            
            <div class="card-block p-2 card-block-down mb-4"  style="background: #D7ECCB;">
                <div class="row px-4 mt-4 mb-3" style="background: #D7ECCB;">
                    <!-- Vet Certiicate -->
                    <div class="col-md-4 mb-5" style="margin: auto;">
                        <p>Upload Cattle Medical Report:</p>
                        <div class="file-upload">
                            <div class="image2-upload-wrap">
                                <input
                                    class="file2-upload-input"
                                    type="file"
                                    onchange="readURL2(this);"
                                    accept="application/pdf"
                                    name="pdf_file"
                                />
                                <img class="img-card" src="<?php echo e(asset('images/image.png')); ?>"/>
                                
                            </div>

                            <div class="file2-upload-content">
                                <img
                                    class="file2-upload-image"
                                    src=""
                                    alt="cow-with-owner"
                                />
                            </div>
                            <div class="image2-title-wrap">
                                <button
                                    class="file-upload-btn mt-4"
                                    type="button"
                                    onclick="$('.file2-upload-input').trigger( 'click' )"
                                    style="background: #086343"
                                    >
                                    Upload
                                </button>
                                <button
                                    type="button"
                                    onclick="removeUpload2()"
                                    class="remove-image"
                                >
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </div>
                            <select name="cattle_id" id="cattle_id" class="form-control mt-3">
                                <option value="">SELECT CATTLE</option>
                                <?php $__currentLoopData = $cattle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cattle_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register button -->
            <div class="mb-3">
                <button type="submit" class="register-button" style="background: #086343">Register</button>
                <a href="<?php echo e(route('write.medical.report')); ?>" class="btn px-2 register-button" style="background: #086343">Write Report</a>
            </div>
        </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/medical-report.blade.php ENDPATH**/ ?>