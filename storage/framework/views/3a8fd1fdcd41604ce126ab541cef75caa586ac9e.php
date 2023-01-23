<?php $__env->startSection('content'); ?>
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Company Profile</h1>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('profile.store')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" value="<?php echo e(Auth::user()->name); ?>" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter Email" value="<?php echo e(Auth::user()->email); ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" placeholder="Enter Email" value="<?php echo e(Auth::user()->phone); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Personal Website Address" value="<?php echo e(old('website')); ?>" required>
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input type="text"  name="address" class="form-control" placeholder="Enter About" value="<?php echo e(old('address')); ?>" required>
                  </div>
                <div class="mb-3">
                    <label  class="form-label">About</label>
                    <input type="text"  name="about" class="form-control" placeholder="Enter About" value="<?php echo e(old('about')); ?>" required>
                  </div>
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

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/company/profile.blade.php ENDPATH**/ ?>