@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Write Here about your cattle medical report:</b></h2>
            <form class="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="write_report" placeholder="Write a brief description about your cattle medical report..." class="form-control" rows="10"></textarea>
                </div>
                <!-- Register button -->
                <div class="px-4 py-5">
                    <button type="submit" class="register-button">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection