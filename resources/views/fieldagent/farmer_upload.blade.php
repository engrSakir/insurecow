@extends('layouts.fieldagent')

@push('css')
    <link rel="stylesheet" href="{{asset('css/upload.css')}}">
@endpush
@section('content')

    <div class="row d-flex justify-content-center mt-100" style="margin: 0; padding: 40px" >
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h1>Upload Your Farmer List Here.</h1>
                </div>
                <div class="card-block">
                    <form action="{{route('fieldagent.import')}}" method="POST" enctype="multipart/form-data" class="dropzone dz-clickable">
                        @csrf
                        <div class="dz-default dz-message"><span>Drop files here to upload</span>
                            <input type="file" name="file">
                        </div>

                        <div class="m-t-20">
                            <button class="btn " style="background-color: #0f6848;color: #FFFFFF">Import File</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
