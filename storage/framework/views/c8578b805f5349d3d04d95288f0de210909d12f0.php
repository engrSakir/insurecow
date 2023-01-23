<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/company.css')); ?>">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insurecow</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <style>

        .active {
            background: #ffffff;
        }
        .border-green {
            border-left: 0.25rem solid #086343 !important;
        }
        body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
            cursor: url('<?php echo e(asset('images/favicon.png')); ?>'), auto;
        }
    </style>


    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js" integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar" style="background: linear-gradient(rgba(199, 248, 201, 1),rgba(221, 237, 199, 1));">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
               href="<?php echo e(route('company.index')); ?>">

                <?php if(\App\Company::where('user_id',auth()->user()->id)->count() == 0): ?>
                <div class="sidebar-brand-icon mt-5">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" class="img-fluid" width="100px">
                </div>
                <?php else: ?>
                <div class="sidebar-brand-icon mt-5">
                    <img src="<?php echo e(asset('storage/'.\App\Company::where('user_id', auth()->user()->id)->orderBy('id','desc')->first()->image)); ?>" class="img-fluid" width="100px">
                </div>
                <?php endif; ?>


            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item border-bottom border-dark <?php echo e((request()->is('company/home')) ? 'active' : ''); ?> mt-5 pt-2 pb-2">
                <a class="nav-link text-dark text-dark" href="<?php echo e(route('company.index')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <?php if(auth()->user()->company()->count() == 0): ?>
                <!-- Nav Item - Profile -->
                <li class="nav-item border-bottom border-dark <?php echo e((request()->is('company/profile')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('profile.index')); ?>">
                        <i class="fas fa-fw fa-user-circle text-dark"></i>
                        <span>Profile</span></a>
                </li>
            <?php else: ?>
                <!-- Nav Item - Profile Edit -->
                <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/profile/edit')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('profile.edit', auth()->user()->id)); ?>">
                        <i class="fas fa-fw fa-edit text-dark"></i>
                        <span>Edit Profile</span></a>
                </li>
            <?php endif; ?>

            <!-- Nav Item - Registration -->
            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/reg')) ? 'active' : ''); ?> pt-2 pb-2">
                <a class="nav-link text-dark" href="<?php echo e(route('company.reg')); ?>">
                    <i class="fas fa-fw fa-user-edit text-dark"></i>
                    <span>Registration</span></a>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/history')) ? 'active' : ''); ?> pt-2 pb-2">
                <a href="<?php echo e(route('company.history')); ?>" class="nav-link text-dark">
                    <i class="fas fa-fw fa-undo-alt text-dark"></i>
                    <span>History</span></a>
            </li>

            <?php if(auth()->user()->policy()->count() == 0): ?>
                <!-- Nav Item - Profile -->
                <li class="nav-item border-bottom border-dark <?php echo e((request()->is('company/policy')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('policy.index')); ?>">
                        <i class="fas fa-fw fa-user-circle text-dark"></i>
                        <span>Policy</span></a>
                </li>
            <?php else: ?>
                <!-- Nav Item - Profile Edit -->
                <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/policy/edit')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('policy.edit', auth()->user()->id)); ?>">
                        <i class="fas fa-fw fa-edit text-dark"></i>
                        <span>Edit Policy</span></a>
                </li>
            <?php endif; ?>
            <?php if(auth()->user()->quotation()->count() == 0): ?>
                <!-- Nav Item - Profile -->
                <li class="nav-item border-bottom border-dark <?php echo e((request()->is('company/quotation')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('quotation.index')); ?>">
                        <i class="fas fa-fw fa-user-circle text-dark"></i>
                        <span>Quotation</span></a>
                </li>
            <?php else: ?>
                <!-- Nav Item - Profile Edit -->
                <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/quotation/edit')) ? 'active' : ''); ?> pt-2 pb-2">
                    <a class="nav-link text-dark" href="<?php echo e(route('quotation.edit', auth()->user()->id)); ?>">
                        <i class="fas fa-fw fa-edit text-dark"></i>
                        <span>Edit Quotation</span></a>
                </li>
            <?php endif; ?>

            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/')) ? 'active' : ''); ?> pt-2 pb-2">
                <a href="<?php echo e(route('company.index')); ?>" class="nav-link text-dark">
                    <i class="fas fa-fw fa-clipboard text-dark"></i>

                    <span>Pending Policy List</span></a>
            </li>

            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/pending_quotation')) ? 'active' : ''); ?> pt-2 pb-2">
                <a href="<?php echo e(route('company.pending_quotation')); ?>" class="nav-link text-dark">
                    <i class="fas fa-fw fa-user-clock text-dark"></i>
                    <span>Pending Quotations</span></a>
            </li>

            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/package')) ? 'active' : ''); ?> pt-2 pb-2">
                <a href="<?php echo e(route('package.index')); ?>" class="nav-link text-dark">
                    <i class="fas fa-fw fa-box-open text-dark"></i>
                    <span> Create Packages</span></a>
            </li>
            <li class="nav-item border-bottom border-dark text-dark <?php echo e((request()->is('company/view_package')) ? 'active' : ''); ?> pt-2 pb-2">
                <a href="<?php echo e(route('package.create')); ?>" class="nav-link text-dark">
                    <i class="fas  fa-fw fa-box-open   text-dark"></i>
                    <span> Packages List</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Topbar -->

            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <!-- Page level custom scripts -->


    <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo/chart-pie-demo.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->

    <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('js/demo/datatables-demo.js')); ?>"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <?php if(session()->has('message')): ?>
        <script>
           swal("Done!!","<?php echo Session::get('message'); ?>","success",{
              button:"OK",
            })
        </script>

    <?php endif; ?>

    <?php if(session()->has('warn')): ?>
        <script>
           swal("Hey??","<?php echo Session::get('warn'); ?>","warning",{
              button:"OK",
            })
        </script>

    <?php endif; ?>
    <?php if(session()->has('alt')): ?>
        <script>
           swal("Done!!","<?php echo Session::get('alt'); ?>","success",{
              button:"OK",
            })
        </script>

    <?php endif; ?>
    <?php if(session()->has('alrt')): ?>
    <script>
       swal("Done!!","<?php echo Session::get('alrt'); ?>","success",{
          button:"OK",
        })
    </script>

   <?php endif; ?>

    <?php if(session()->has('qts')): ?>
        <script>
            swal("Done!!","<?php echo Session::get('qts'); ?>","success",{
                button:"OK",
            })
        </script>

    <?php endif; ?>
    <?php if(session()->has('pkg')): ?>
        <script>
            swal("Done!!","<?php echo Session::get('pkg'); ?>","success",{
                button:"OK",
            })
        </script>

    <?php endif; ?>

    <script type="text/javascript">
        function confirmation(e) {
            e.preventDefault();

            var url = e.currentTarget.getAttribute('href')

            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, recall!'
            }).then((result) => {
                if (result.value) {
                    window.location.href=url;
                }
            })
        }
    </script>

    

    

    <style>
        .tox-notifications-container{
            display: none !important;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>



    <script>
        tinymce.init({
            /* ... */
            fontsize_formats: "8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 17pt 18pt 24pt 30pt 36pt 48pt 60pt",
            selector: 'textarea',
            plugins: ['advlist autolink lists link image charmap preview anchor pagebreak' , 'table'],
            toolbar_mode: 'floating',
            toolbar: 'numlist bullist | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
            content_style: "@import  url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');",
            font_formats:
                "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats; Lato='Lato'",
            // menubar: 'table',
        });
    </script>

    <script>
        const passwordInput = document.querySelector("#password")
        const eye = document.querySelector("#eye")
        eye.addEventListener("click", function(){
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
            passwordInput.setAttribute("type", type)
        })
    </script>

</body>

</html>
<?php /**PATH /home/pc-1/insurecow/resources/views/layouts/company.blade.php ENDPATH**/ ?>