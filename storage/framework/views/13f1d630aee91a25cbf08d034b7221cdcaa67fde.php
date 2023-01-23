<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/form_page.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Medical History</b></h2>
            <div class="table-responsive">
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">DISEASE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">VACCINE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">NEXT VACCINE DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">PDF MEDICAL REPORT</th>
                    </tr>
                </thead>
                <tbody>   
                    <?php $__currentLoopData = $vaccine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count($vaccine)>0): ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($vac->date); ?></td>
                            <td><?php echo e($vac->disease_name); ?></td>
                            <td><?php echo e($vac->vaccine_name); ?></td>
                            <td><?php echo e($vac->next_vaccination_date); ?></td>
                            <td>
                                <?php if($vac->pdf_file): ?>
                                    <a href="<?php echo e(route('view.pdf', [$vac->id, $vac->cattle_id])); ?>" class="btn text-white" target="_blank" style="background: #086343">VIEW PDF</a>
                                    <?php else: ?>
                                        No PDF Found
                                    <?php endif; ?>
                                    
                            </td>
                        </tr>
                        <?php else: ?>
                            <tr>
                                <td>No Reports Found</td>    
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/medical-history.blade.php ENDPATH**/ ?>