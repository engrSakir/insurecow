<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    <!--==================== FONT AWESOME ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
        .dropdown-item.active, .dropdown-item:active {
            color: #fff !important;
            text-decoration: none;
            background-color: #086343;
        }
        .thead-style {
            background: #086343 !important;
        }
        html body {
            font-family: "Roboto Slab", sans-serif !important;
            color: #082E13;
        }
        .form-section{
            display: none;
        }
        .form-section.current{
            display: inline;
        }
        .parsley-errors-list{
            color:red;
        }
    </style>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="https://insurecow.com/Field_Agent_Site/view_registered/css/view_registered.css" />

    <!--=============== CSS ===============-->


        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

        @stack('css')

    <style>
        body{
            background: linear-gradient(140.42deg, #C5EAD5 21.42%, #DDEDC7 96.29%);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
        }
    </style>

        <title>InsureCow</title>
    </head>

    <body>
    @include('inc.farmer_onboard_header')
    {{-- content --}}
    <div class="container">
        @yield('content')
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        $(document).ready(function () {
            $('#insurecow-datatable').DataTable();
        });

        $('#insurecow-datatable').DataTable({
            responsive: true
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            var $sections=$('.form-section');
            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);

                const step= document.querySelector('.step'+index);
                step.style.backgroundColor="#226034";
                step.style.color="white";
            }
            function curIndex(){
                return $sections.index($sections.filter('.current'));
            }
            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function(){
                $('.employee-form').parsley().whenValidate({
                    group:'block-'+curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });
            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block-'+index);
            });
            navigateTo(0);
        });

    </script>
</body>

</html>
