<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('/css/register_page_02.css')); ?>" />
        <style>
            @import  url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap");

            * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            }

            html body {
            font-family: "Poppins", sans-serif;
            color: #082e13;
            }

            .hr-style {
            margin: 0;
            background: #2f673f;
            }

            section {
            margin-top: 2rem;
            margin-bottom: 5rem;
            }

            /* Navbar */
            nav .navbar-nav li a {
            font-size: 18px;
            color: #082e13 !important;
            }

            nav .navbar-nav li a:hover {
            text-decoration: underline;
            text-underline-offset: 5px;
            text-decoration-thickness: 2px;
            text-decoration-color: #1d5c2e;
            }

            .navbar-light .navbar-toggler {
            border-color: #fff;
            }

            .navbar-toggler:focus {
            box-shadow: none;
            }

            .vr-style {
            color: #2f673f;
            margin-top: 14px;
            height: 30px;
            }

            .signout-button {
            width: 140px;
            background: #23bb86;
            color: #fff;
            font-size: 18px;
            text-align: center;
            border: none;
            border-radius: 5px;
            padding: 8px 0px;
            }

            /* Navbar */

            /* Middle Content */
            .main-section {
            margin-bottom: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 78px;
            }

            form {
            box-shadow: 0px 4px 18px rgba(79, 172, 35, 0.5);
            border-radius: 4px;
            overflow: hidden;
            }

            .card-header {
            background-color: #23bb86;
            color: #ffff;
            font-size: 22px;
            }

            .cow-details .owner,
            .cow-details .species,
            .cow-details .issue-date,
            .cow-details .pdf {
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            }

            .cow-details .pdf > div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            }

            /* Table */
            .table-style {
            border-radius: 3px;
            box-shadow: rgba(35, 187, 10, 0.4) 0px 3px 8px;
            margin: 0;
            }

            .table th {
            background-color: #23bb86;
            color: #fff;
            font-weight: 400;
            font-size: 22px;
            }

            .table td {
            font-weight: 300;
            font-size: 16px;
            }

            .table th,
            .table td {
            padding-left: 52px;
            }

            .table tbody tr:nth-child(odd) {
            background-color: #f8f7f5;
            }

            /* Table */
            /* Middle Content */

            /* Footer */
            .language-footer {
            text-decoration: none;
            color: #082e13;
            }

            .language-footer:hover {
            color: #082e13;
            text-decoration: underline;
            text-underline-offset: 5px;
            text-decoration-thickness: 2px;
            text-decoration-color: #1d5c2e;
            }

            /* Footer */

            /* Media screen for mobile devices */
            @media  only screen and (max-width: 600px) {
            /* Navbar */
            .signout-button {
                width: 120px;
                padding: 6px 0px;
            }
            /* Navbar */

            /* Middle-content */
            .cow-details .pdf > div {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            /* Middle-content */
            }

        </style>
    <?php $__env->stopPush(); ?>
    <section>
      <div class="main-section">
        <div class="cow-img">
          <img src="<?php echo e(url('storage/'.$registeredcattle->cow_with_owner)); ?>" alt="" />
          <p class="text-center">Cow with Owner</p>
        </div>
      </div>

      <div class="cow-details">
        <form>
          <div class="information">
            <div class="card-header row">Cow Details Information</div>

            <div style="background-color: #f9f6f6" class="row d-flex owner">
              <div class="col-lg-5">
                <p>Owner Name : <?php echo e($registeredcattle->firstname); ?></p>
                <p>Post : <?php echo e($registeredcattle->post); ?></p>
              </div>
              <div class="col-lg-5">
                <p>Thana : <?php echo e($registeredcattle->thana); ?></p>
                <p>Contact Number : <?php echo e($registeredcattle->contact); ?></p>
              </div>
            </div>

            <div
              style="border-bottom: 1px solid #2f673f"
              class="row d-flex species"
            >
              <div class="col-lg-5">
                <p>Cattle Species : <?php echo e($registeredcattle->cattle_breed); ?></p>
                <p>Age : <?php echo e($registeredcattle->age); ?> year</p>
                <p>Gender : <?php echo e($registeredcattle->gender); ?></p>
              </div>
              <div class="col-lg-5">
                <p>Cattle Bread : <?php echo e($registeredcattle->cattle_breed); ?></p>
                <p>Weight : <?php echo e($registeredcattle->weight); ?> Kg</p>
                <p>Cattle ID : <?php echo e($registeredcattle->cattle_unique_id); ?></p>
              </div>
            </div>

            <div class="row d-flex issue-date">
              <div class="col-lg-5">
                <p>Issuing Date : <?php echo e($registeredcattle->created_at); ?></p>
              </div>
              <div class="col-lg-5">
                <?php if($pending): ?>
                <p>Period of Insurance : <?php echo e($pending->insurance_period); ?> Years</p>
                <?php else: ?>
                <p>No Insurance found for this Cattle</p>
                <?php endif; ?>
              </div>
            </div>

            <!-- <div style="background-color: #f9f6f6" class="row d-flex pdf">
              <div>
                <div class="col-lg-3 mb-4">
                  <p>Owner NID :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
                <div class="col-lg-3 mb-4">
                  <p>Vet Certificate :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
                <div class="col-lg-3 mb-4">
                  <p>Chairman Certificate :</p>
                  <img class="img-fluid" src="./images/pdf.png" alt="" />
                </div>
              </div>
            </div> -->

            <div class="vet-support">
              <!-- <p class="ps-4">Vet Support History</p> -->
              <!-- Table -->
              <div class="table-responsive col-lg-12 table-style">
                <table class="table table-hover" id="vet-support-table">
                  <thead>
                    <tr>
                      <th scope="col">Disease</th>
                      <th scope="col">Details</th>
                      <th scope="col">Issue Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($medicals): ?>
                      <?php $__currentLoopData = $medicals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td scope="row"><?php echo e($medical->disease_name); ?></td>
                        <td>Demo Text</td>
                        <td><?php echo e($medical->date); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                      <tr>
                        <td>No Records Found.</td>
                      </tr>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <!-- Table -->
            </div>
          </div>
        </form>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.farmer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pc-1/insurecow/resources/views/farmer/show-registered-cattle.blade.php ENDPATH**/ ?>