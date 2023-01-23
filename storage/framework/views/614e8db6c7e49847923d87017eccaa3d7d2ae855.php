<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <section>
    <div class="card mt-4 mb-5">
        <form action="<?php echo e(route('farmerprofiles.update', $profile->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('put'); ?>
        <?php echo e(csrf_field()); ?>

            <div class="card-block p-2 card-block-top mb-4">
                <h4 class="ms-4">Update Farmer Profile</h4>
            </div>
            <div class="card-block p-2 card-block-down">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row px-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputFirstName">First name :</label>
                            <input type="text" id="inputFirstName" class="form-control input-style" name="first_name" value="<?php echo e($profile->first_name); ?>" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Last name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="last_name"  value="<?php echo e($profile->last_name); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Email :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="email" value="<?php echo e($profile->email); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Phone :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="phone" value="<?php echo e($profile->phone); ?>" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="address"  value="<?php echo e($profile->address); ?>" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">City :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="city"  value="<?php echo e($profile->city); ?>" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">District :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="district"  value="<?php echo e($profile->district); ?>" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Zip Code :</label>
                            <input type="number" id="inputLastName" class="form-control input-style" name="zip_code"  value="<?php echo e($profile->zip_code); ?>" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Country :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="country"  value="<?php echo e($profile->country); ?>" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-outline">
                            <img src="<?php echo e(asset('storage/' . $profile->image)); ?>" class="img-fluid" width="150px"><br><br>
                            <label class="form-label" for="inputLastName">Image :</label>
                            <input type="file" id="inputLastName" class="form-control input-style" name="image"/>
                        </div>
                    </div><hr>
                    <div class="form-group mb-4">

                        <button type="submit" class="btn text-white" style="background: #23BB86">Update</button>

                        <button type="submit" class="btn register-button">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/edit.blade.php ENDPATH**/ ?>