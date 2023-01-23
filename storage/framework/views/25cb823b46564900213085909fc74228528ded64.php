<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card p-5" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border: 1px solid #000000;">
                    <a href="<?php echo e(route('onboard.index')); ?>" class="float-start mb-3 p-3 text-dark" style="width: 150px; background: linear-gradient(268.09deg, #C5EAD5 24.79%, #FFFFFF 99.54%);border-radius: 20px;"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                    <?php $__currentLoopData = $pakages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pakage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="background: linear-gradient(101.16deg, #FFFFFF 0.38%, rgba(179, 255, 143, 0.25) 81.93%);border: 1px solid #000000;box-shadow: -2px -2px 10px rgba(0, 0, 0, 0.25), 2px 2px 10px rgba(0, 0, 0, 0.25);border-radius: 10px;" class="mb-2">    
                        <center>
                        <div class="text-box ml-5" style="display: inline-block">
                        <?php
                            $image = App\Company::where('user_id', $pakage->user_id)->first();
                        ?>
                        <?php if($image): ?>
                            <img src="<?php echo e(asset('storage/' . $image->image)); ?>" class="img-fluid" width="200px">
                        <?php else: ?>
                            <img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg" alt="">
                        <?php endif; ?>
                        
                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Plan Name</span><br>
                            <span style="margin-left: 10px"><?php echo e($pakage->name); ?></span>
                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Insurance Period</span><br>
                            <span style="margin-left: 10px"><?php echo e($pakage->insurance_period); ?> Year</span>
                        </div>
                        <div class="text-box" style="display: inline-block">
                            <span style="margin-left: 10px; color: #7B7B7B">Coverage</span><br>
                            <span style="margin-left: 10px; margin-right: 10px"><?php echo e($pakage->price_range); ?></span>
                        </div>
                        <div class="text-box p-5" style="display: inline-block">
                            <a href="<?php echo e(route('onboard.show')); ?>" class="btn w-100 mb-2" style="background: #d9d9d9">Details</a><br>
                            <!-- <a href="" class="btn w-100 text-white"  style="background: #082E13">Request Now</a> -->
                            <form action="<?php echo e(route('insurance.save')); ?>" method="get">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="cattle_id" value="<?php echo e($data['cattle_id']); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e($data['user_id']); ?>">
                                <input type="hidden" name="buying_price" value="<?php echo e($data['buying_price']); ?>">
                                <input type="hidden" name="insurance_period" value="<?php echo e($data['insurance_period']); ?>">
                                <input type="hidden" name="accidental_mortality" value="<?php echo e($data['accidental_mortality']); ?>">
                                <input type="hidden" name="additionalcoverages" value="<?php echo e($data['additionalcoverages']); ?>">
                                <input type="hidden" name="company_id" value="<?php echo e($pakage->user_id); ?>">
                                <button type="submit" class="btn w-100 text-white" style="background: #082E13">Request Now</button>
                            </form>
                        </div>
                        </center>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.farmer_onboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/onboard/insurance_results.blade.php ENDPATH**/ ?>