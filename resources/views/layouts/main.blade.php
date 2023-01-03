<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <meta name="author" content="">

    <title>Insurecow</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
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
        body,aside,select,option,header,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
            cursor: url('{{ asset('images/favicon.png') }}'), auto;
        }
    </style>
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar" style="background: rgba(79, 172, 35, 0.25);">
        
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('superadmin.index') }}">
                <div class="sidebar-brand-icon mt-5">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid">
                </div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item border-bottom border-dark {{ (request()->is('superadmin/home')) ? 'active' : '' }} mt-5 pt-2 pb-2">
                <a class="nav-link text-dark text-dark" href="{{ route('superadmin.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            

            @if (auth()->user()->profile()->count() == 0)
                <!-- Nav Item - Profile -->
                <li class="nav-item border-bottom border-dark {{ (request()->is('superadmin/profiles')) ? 'active' : '' }} pt-2 pb-2">
                    <a class="nav-link text-dark" href="{{ route('profiles.index') }}">
                        <i class="fas fa-fw fa-user-circle text-dark"></i>
                        <span>Profile</span></a>
                </li>
            @else
                <!-- Nav Item - Profile Edit -->
                <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('superadmin/profiles/1/edit')) ? 'active' : '' }} pt-2 pb-2">
                    <a class="nav-link text-dark" href="{{ route('profiles.edit', auth()->user()->id) }}">
                        <i class="fas fa-fw fa-edit text-dark"></i>
                        <span>Edit Profile</span></a>
                </li>
            @endif




            <!-- Nav Item - Registration -->
            <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('superadmin/reg')) ? 'active' : '' }} pt-2 pb-2">
                <a class="nav-link text-dark" href="{{ route('superadmin.reg') }}">
                    <i class="fas fa-fw fa-user-edit text-dark"></i>
                    <span>Registration</span></a>
            </li>



            <!-- Nav Item - History -->
            <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('superadmin/history')) ? 'active' : '' }} pt-2 pb-2">
                <a href="{{ route('superadmin.history') }}" class="nav-link text-dark">
                    <i class="fas fa-fw fa-undo-alt text-dark"></i>
                    <span>History</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            @include('inc.nav')
            <!-- End of Topbar -->

            @yield('content')

            <!-- Footer -->
            @include('inc.footer')
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
  

    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
<!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    <!-- Custom scripts for all pages-->
   <!---- -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Sweet alert script start --}}
    @if(session()->has('message'))
        <script>
           swal("Done!!","{!! Session::get('message')!!}","success",{
              button:"OK",
            })
        </script>

    @endif

    @if(session()->has('warn'))
        <script>
           swal("Hey??","{!! Session::get('warn')!!}","warning",{
              button:"OK",
            })
        </script>

    @endif

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
  
    {{-- Sweet alert script end --}}

</body>

</html>
