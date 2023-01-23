<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Saved Medical Reports</b></h2>
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">CATTLE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">DISEASE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">VACCINE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">NEXT VACCINE DATE</th>
                        
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">PDF MEDICAL REPORT</th>
                    </tr>
                </thead>
                <tbody>   
                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($reports)>0): ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($repo->date); ?></td>
                        <td><?php echo e($repo->cattle->cattle_name); ?></td>    
                        <td><?php echo e($repo->disease_name); ?></td>    
                        <td><?php echo e($repo->vaccine_name); ?></td>    
                        <td><?php echo e($repo->next_vaccination_date); ?></td>
                        <td>
                            <?php if($repo->pdf_file): ?>
                                <a href="<?php echo e(route('view.pdf', [$repo->id, $repo->cattle_id])); ?>" class="btn text-white" target="_blank" style="background: #086343">VIEW PDF</a>
                            <?php else: ?>
                                No Available Record.
                            <?php endif; ?>
                        </td>  
                    </tr>
                    <?php else: ?>
                        <tr>
                            <td>No Reports Found</td>    
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <td>
                            <a href="#">
                                <button class="details-button">Details</button>
                            </a>
                        </td> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/saved-medical-reports.blade.php ENDPATH**/ ?>