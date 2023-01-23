<?php $__env->startSection('content'); ?>
    <h1 class="h3 mb-4 text-gray-800 text-center">User Details</h1>

    <div  style="display: flex; justify-content:right ; padding:20px;">

        <a href="<?php echo e(route('superadmin.history')); ?>" class="d-none d-sm-inline-block btn btn-sm text-white shadow-sm" style="background-color: #086343"><i
                class="fas fa-arrow-left fa-sm text-white-100"></i> Go Back</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>

                    <th>Role</th>


                </tr>
                </thead>

                <tbody>

                    <tr align="center">
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                        <td><?php echo e($user->adress); ?></td>
                        <td><?php echo e($user->role_1); ?></td>




                    </tr>

                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/superadmin/viewall.blade.php ENDPATH**/ ?>