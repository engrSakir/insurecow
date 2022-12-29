@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center mt-3"><b>Choose Your Plans</b></h2>
        <div class="col-lg-4">
            <div class="card card-style mt-4 mb-5 pt-5 pb-5" style="background: #D3EAC8">
                <div class="card-body p-5">
                    <h3 class="p-2">Monthly</h3>
                    <h3 class="p-2"><b>50Tk/Month</b></h3>
                    <a href="#" class="btn register-button">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-style mt-4 mb-5 pt-5 pb-5" style="background: #C5CAFF">
                <div class="card-body p-5">
                    <h3 class="p-2">Half Yearly</h3>
                    <h3 class="p-2"><b>250Tk/Month</b></h3>
                    <a href="#" class="btn register-button">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-style mt-4 mb-5 pt-5 pb-5" style="background: #FFD6AD">
                <div class="card-body p-5">
                    <h3 class="p-2">Yearly</h3>
                    <h3 class="p-2"><b>450Tk/Month</b></h3>
                    <a href="#" class="btn register-button">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection