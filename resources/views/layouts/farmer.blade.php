<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <!--==================== FONT AWESOME ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!--=============== DATATABLE CSS ===============-->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" rel="stylesheet">
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
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="https://insurecow.com/Field_Agent_Site/view_registered/css/view_registered.css" />

    <!--=============== CSS ===============-->


    @stack('css')

    <title>InsureCow</title>
</head>

<body class="container">




    @include('inc.farmer_header')
    {{-- content --}}
    @yield('content')
    {{-- footer --}}
    @include('inc.farmer_footer')











    <!--==================== JavaScript Bundle with Popper ====================-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


    <script src="{{asset('js/reg_js/face_of_cow.js')}}"></script>
    <script src="{{asset('js/reg_js/left_side.js')}}"></script>
    <script src="{{asset('js/reg_js/right_side.js')}}"></script>
    <script src="{{asset('js/reg_js/special_marks.js')}}"></script>
    <script src="{{asset('js/reg_js/cow_with_owner.js')}}"></script>
    <script src="{{asset('js/reg_js/pdf_upload.js')}}"></script>

    <!--=============== DATATABLE JS ===============-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#insurecow-datatable').DataTable();
        });

        $('#insurecow-datatable').DataTable({
            responsive: true
        });
    </script>








</body>

</html>
