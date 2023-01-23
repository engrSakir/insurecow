<?php $__env->startSection('content'); ?>
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Company Edit Profile</h1>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('profile.update',$company->id)); ?>" method="POST" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>

                <?php echo method_field('put'); ?>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name"
                        value="<?php echo e(auth()->user()->name); ?>" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" value="<?php echo e(auth()->user()->email); ?>"
                        name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Personal Website Address"
                        value="<?php echo e($company->website); ?>" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter About"
                        value="<?php echo e($company->address); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">About</label>
                    <input type="text" name="about" class="form-control" placeholder="Enter About"
                        value="<?php echo e($company->about); ?>">
                </div>


                <img src="<?php echo e(asset('storage/' . $company->image)); ?>" alt="" style="width: 200px; height: 200px">

                <div class="form-control">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    <input type="file" name="image">
                </div><br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/edit.blade.php ENDPATH**/ ?>