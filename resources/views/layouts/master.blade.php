<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== BOOTSTRAP ====================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--==================== FONT AWESOME ====================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('/css/register_page_02.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/form_page.css')}}" />

    <title>InsureCow</title>
</head>

<body class="container">
    {{-- header --}}
    @include('inc.header')
    {{-- content --}}
    @yield('content')
    {{-- footer --}}
    @include('inc.ffooter')





 <!--==================== JavaScript Bundle with Popper ====================-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script src="{{asset('js/reg_js/face_of_cow.js')}}"></script>
<script src="{{asset('js/reg_js/left_side.js')}}"></script>
<script src="{{asset('js/reg_js/right_side.js')}}"></script>
<script src="{{asset('js/reg_js/special_marks.js')}}"></script>
<script src="{{asset('js/reg_js/cow_with_owner.js')}}"></script>
<script src="{{asset('js/reg_js/pdf_upload.js')}}"></script>
</script>
</body>
</html>