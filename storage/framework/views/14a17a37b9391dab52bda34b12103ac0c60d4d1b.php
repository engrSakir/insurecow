<?php $__env->startSection('content'); ?>
<h1 class="h3 mb-4 text-gray-800 text-center">History</h1>
<div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">

                                    <th>Company Name</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>

                            <tbody>
                         <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr align="center">
                                    <td><?php echo e($users->name); ?></td>
                                    <td><?php echo e($users->created_at); ?></td>

                                    <td><a href="<?php echo e(route('superadmin.view',$users->id)); ?>" class="btn text-white" style="background: #086343;"><i class="fa fa-info-circle " aria-hidden="true"></i></a></td>

                                    <td><a href="<?php echo e(route('superadmin.delete',$users->id)); ?>"  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                    </div>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/superadmin/history.blade.php ENDPATH**/ ?>