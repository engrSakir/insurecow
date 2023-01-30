@extends('layouts.landlayouts')


<style>
    body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
        cursor: url('{{ asset('images/favicon.png') }}'), auto;
    }
</style>

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/otp.css')}}">

{{--    @if(session('success'))--}}
{{--        <div style="color: #0f6848">--}}
{{--            {{session('success')}}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--        @if(session('error'))--}}
{{--            <div style="color: red">--}}
{{--                {{session('error')}}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    <form action="{{route('otp.getlogin')}}" method="post">--}}
{{--    @csrf--}}
{{--        <input type="hidden" name="user_id" value="{{$user_id}}">--}}
{{--        <label for="">OTP</label>--}}
{{--        <input type="text" name="otp" id="" value="{{old('otp')}}" required placeholder="Enter OTP"><br>--}}

{{--        <button type="submit">Login</button>--}}
{{--    </form>--}}






    @if(session('error'))
        <div style="color: red">
            {{session('error')}}
        </div>
    @endif

<div class="container">

    <h1 class="p-3" style="color: #082E13; font-family: 'Roboto Slab';font-style: normal;font-weight: 700;font-size: 20px;line-height: 26px;text-decoration-line: underline;">Enter Your OTP</h1>
  <p class="para" align="center">An OTP sends to your mobile number. <br>Please enter the 6 digit OTP.</p>
    @error('otp')
    <strong style="color: red">{{$message}}</strong>
    @enderror
    <form action="{{route('otp.getlogin')}}" method="post">
        @csrf
    <div class="userInput">

        <input type="text" name="otp" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec') "value="{{old('otp')}}">
        <input type="text" name="otp" id="sec" maxlength="1" onkeyup="clickEvent(this,'third') " value="{{old('otp')}}">
        <input type="text" name="otp" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')"value="{{old('otp')}}">
        <input type="text" name="otp" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')"value="{{old('otp')}}">
        <input type="text" name="otp" id="fifth" maxlength="1" onkeyup="clickEvent(this,'sixth')"value="{{old('otp')}}">
        <input type="text" name="otp" id="sixth" maxlength="1" value="{{old('otp')}}">

    </div>

                <button type="submit" class="button">CONFIRM</button>

    </form>
</div>
<script src="{{asset('js/otp.js')}}"></script>

@endsection
