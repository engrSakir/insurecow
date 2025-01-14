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
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/fdash.css')}}">
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
        .scroll-to-top i {
          margin-top: 12px;
        }
        /* 
        @media only screen and (max-width: 320px) {
            .generate-report {
                display: inline-block; 
            }
        } 
        */

        .dropdown-item.active, .dropdown-item:active {
            color: #fff !important;
            text-decoration: none;
            background-color: #086343 !important;
        }
        
    </style>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
    <style>
      .fc-unthemed td.fc-today { background: #1D5C2C; color: #ffffff; }
      .fc-event, .fc-event-dot { background: #1D5C2C; border: 1px solid #1D5C2C; color: #ffffff !important; }
      .fc-time { display: none; }
      .alert-insurecow { background: #1D5C2C; color: #ffffff; }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/register_page_02.css')}}" />
    <!--=============== DATATABLE CSS ===============-->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" rel="stylesheet">
</head> 

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar" style="background: linear-gradient(rgba(199, 248, 201, 1),rgba(221, 237, 199, 1));">

        <!-- Sidebar - Brand -->

        <a href="{{route('farmer.index')}}" class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon mt-5">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid">
            </div>
        </a>


        <!-- Nav Item - Dashboard -->
        <li class="nav-item border-bottom border-dark {{ (request()->is('fdashboard/fdashboard')) ? 'active' : '' }} mt-5 pt-2 pb-2">
            <a class="nav-link text-dark text-dark" href="{{route('fdashboard.index')}}">
                <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Registration -->

        <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('fdashboard/reg')) ? 'active' : '' }} pt-2 pb-2">
            <a class="nav-link text-dark" href="{{ route('fdashboard.cattle') }}">

                <i class="fas fa-fw  fa-cow text-dark"></i>
                <span>Cattle</span></a>
        </li>

        <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('fdashboard/company_request')) ? 'active' : '' }} pt-2 pb-2">
            <a href="{{ route('fdashboard.financial') }}" class="nav-link text-dark">
                <i class="fas fa-fw fa-chart-line text-dark" aria-hidden="true"></i>
                <span>Financial</span></a>
        </li>


        <!-- Nav Item - History -->
        <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('fdashboard/calender')) ? 'active' : '' }} pt-2 pb-2">
            <a href="{{ route('fdashboard.calender') }}" class="nav-link text-dark">
                <i class="fas fa-fw fa-calendar text-dark"></i>
                <span>Calendar</span></a>
        </li>
        <li class="nav-item border-bottom border-dark text-dark {{ (request()->is('fdashboard/history')) ? 'active' : '' }} pt-2 pb-2">
            <a href="{{ route('fdashboard.report') }}" class="nav-link text-dark">
                <i class="fas fa-fw fa-file text-dark"></i>
                <span>Reports</span></a>
        </li>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Topbar -->
        @include('inc.fd_header')
        <!-- End of Topbar -->

        @yield('content')

        <!-- Footer -->
        @include('inc.fd_footer')
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

<!-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> -->

<!-- <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script> -->

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
@if(session()->has('alt'))
    <script>
        swal("Done!!","{!! Session::get('alt')!!}","success",{
            button:"OK",
        })
    </script>

@endif
@if(session()->has('alrt'))
    <script>
        swal("Done!!","{!! Session::get('alrt')!!}","success",{
            button:"OK",
        })
    </script>

@endif

@if(session()->has('qts'))
    <script>
        swal("Done!!","{!! Session::get('qts')!!}","success",{
            button:"OK",
        })
    </script>

@endif
@if(session()->has('pkg'))
    <script>
        swal("Done!!","{!! Session::get('pkg')!!}","success",{
            button:"OK",
        })
    </script>

@endif

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(document).ready(function () {
        var today = new Date();
        $('#datepicker').datepicker({
            format: 'mm-dd-yyyy',
            autoclose:true,
            endDate: "today",
            changeYear:true,
            yearRange: "-2:+0"
        }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        $('#datepicker').keyup(function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9^-]/g, '');
            }
        });
    });
    </script>
        <script>
    $(document).ready(function () {
        var today = new Date();
        $('#datepicker2').datepicker({
            format: 'mm-dd-yyyy',
            autoclose:true,
            endDate: "today",
            changeYear:true,
            yearRange: "-2:+0"
        }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        $('#datepicker').keyup(function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9^-]/g, '');
            }
        });
    });
    </script>

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
@php
    $data = App\Farmer_reg_2::select('id', 'created_at')->get()->groupBy(function($data){
        return Carbon\Carbon::parse($data->created_at)->format('M');
    });
    $months=[];
    $monthCount=[];
    foreach($data as $month => $values) {
        $months[] = $month;
        $monthCount[] = count($values);
    }
@endphp
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
var _ydata = JSON.parse('{!! json_encode($months) !!}');
var _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var ctx = document.getElementById("myChart");
var barColors = ["#378216", "#D3EAC8","#378216","#D3EAC8","#378216","#D3EAC8","#378216","#D3EAC8"];
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    datasets: [{
      label: _ydata,
      backgroundColor: barColors,
      borderColor: "rgba(2,117,216,1)",
      data: _xdata,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 20,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
<script>
var _ydata = JSON.parse('{!! json_encode($months) !!}');
var _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: _ydata,
    datasets: [{
      data: _xdata,
      backgroundColor: ["#97D92A", "#69EFB3","#97D92A", "#69EFB3"],
    }],
  },
});

</script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script>
$(document).ready(function () {
    var SITEURL = "{{url('/')}}";
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var calendar = $('#calendar').fullCalendar({
      editable: true,
      events: SITEURL + "/farmer/calendar",
      displayEventTime: true,
      editable: true,
      eventRender: function (event, element, view) {
        if (event.allDay === 'true') {
          event.allDay = true;
        } else {
          event.allDay = false;
        }
      },
      selectable: true,
      selectHelper: true,
      select: function (start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
          $.ajax({
            url: SITEURL + "/farmer/calendar/create",
            data: 'title=' + title + '&start=' + start + '&end=' + end,
            type: "POST",
            success: function (data) {
              displayMessage("Added Successfully");
            }
          });
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: false
          },
          true
        );
      }
      calendar.fullCalendar('unselect');
    },
    eventDrop: function (event, delta) {
      var start = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD HH:mm:ss");
      $.ajax({
        url: SITEURL + '/farmer/calendar/update',
        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
        type: "POST",
        success: function (response) {
          displayMessage("Updated Successfully");
        }
      });
    },
    eventClick: function (event) {
      var deleteMsg = confirm("Do you really want to delete?");
      if (deleteMsg) {
        $.ajax({
          type: "POST",
          url: SITEURL + '/farmer/calendar/delete',
          data: "&id=" + event.id,
          success: function (response) {
            if(parseInt(response) > 0) {
              $('#calendar').fullCalendar('removeEvents', event.id);
              displayMessage("Deleted Successfully");
            }
          }
        });
      }
    }
  });
});
function displayMessage(message) {
  $(".response").html("<div class='alert alert-insurecow'>"+message+"</div>");
  setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>
<!--=============== DATATABLE JS ===============-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>   
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#insurecow-datatable').DataTable();
    });
    $('#insurecow-datatable').DataTable({
        responsive: true
    });
</script>
<script>

const calculateSale = (listPrice, discount) => {
  listPrice = parseFloat(listPrice);
  discount  = parseFloat(discount);
  return (listPrice + ( listPrice * discount / 100 )).toFixed(2);
}
const calculateDiscount = (listPrice, salePrice) => {
  listPrice = parseFloat(listPrice);
  salePrice = parseFloat(salePrice);
  return 100 + (salePrice * 100 / listPrice);
}
const $list = $('input[name="list"]'),
      $disc = $('input[name="disc"]'), 
      $sale = $('input[name="sale"]'); 
    
$list.add( $disc ).on('input', () => {
  let sale = $list.val();              
  if ( $disc.val().length ) {          
    sale = calculateSale($list.val(), $disc.val());
  }
  $sale.val( sale );
});

$sale.on('input', () => {      
let disc = 0;                
if ( $sale.val().length ) {  
  disc = calculateDiscount($list.val(), $sale.val());
}
$disc.val( disc );
});

$list.trigger('input');
</script>
</body>

</html>
