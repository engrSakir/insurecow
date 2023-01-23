<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('/css/register_page_02.css')); ?>" />

    <?php $__env->stopPush(); ?>
<section class="mt-4 mb-5">
<h2 class="text-center mt-3"><b>Registered Cattles</b></h2>
<table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
    <thead class="thead-style">
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner Image</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner First Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner Last Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Cattle Weight</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Thana: activate to sort column ascending">Cattle Color</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">Action</th>
        </tr>
    </thead>
    <tbody>
            <?php $__currentLoopData = $registeredcattles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registeredcattle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="dtr-control sorting_1" tabindex="0"><?php echo e($registeredcattle->id); ?></td>
                <td><img src="<?php echo e(url('storage/'.$registeredcattle->cow_with_owner)); ?>" width="50px"></td>
                <td><?php echo e($registeredcattle->firstname); ?></td>
                <td><?php echo e($registeredcattle->lastname); ?></td>
                <td><?php echo e($registeredcattle->weight); ?></td>
                <td><?php echo e($registeredcattle->cattle_color); ?></td>
                <td>
                    <a href="<?php echo e(route('show.farmer.registered.cattle', $registeredcattle->id)); ?>" class="btn text-white" style="background: #086343">Details</a>    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/registered-cattle.blade.php ENDPATH**/ ?>