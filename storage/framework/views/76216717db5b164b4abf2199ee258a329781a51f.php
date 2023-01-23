<?php $__env->startSection('content'); ?>
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Super Admin Profile</h1>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
            <form action="<?php echo e(route('profiles.store')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" value="<?php echo e(Auth::user()->name); ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter Email" value="<?php echo e(Auth::user()->email); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Personal Website Address" value="<?php echo e(old('website')); ?>">
                  </div>

                <div class="mb-3">
                    <label  class="form-label">About</label>
                    <input type="text"  name="about" class="form-control" placeholder="Enter About" value="<?php echo e(old('about')); ?>">
                  </div>
                  <div class="form-control">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                   <input type="file" name="image">
                  </div><br>

                <button type="submit" class="btn btn-primary" style="background: #086343">Submit</button>
              </form>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/superadmin/profile.blade.php ENDPATH**/ ?>