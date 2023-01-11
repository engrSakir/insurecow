@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Upload Cattle Medical Report</b></h2>
            @if ($message = Session::get('success'))
                <p class="p-welcome-text alert alert-success">{{ $message }}</p>
                <!-- <div class="alert alert-success alert-block">
                    <strong>Password must contain at least 1 letter, 1 number, and 1 symbol. Minimum length is 8 characters.</strong>
                </div> -->
              @endif
              <form class="{{ route('save.medical.report') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="card-block p-2 card-block-down mb-4">
                <div class="row px-4 mt-4 mb-3">
                    <!-- Vet Certiicate -->
                    <div class="col-md-4 mb-5" style="margin: auto;">
                        <p>Upload Cattle Medical Report:</p>
                        <div class="file-upload">
                            <div class="image2-upload-wrap">
                                <input
                                    class="file2-upload-input"
                                    type="file"
                                    onchange="readURL2(this);"
                                    accept="image/*"
                                    name="pdf_file"
                                />
                                <img class="img-card" src="{{ asset('images/image.png') }}"/>
                            </div>

                            <div class="file2-upload-content">
                                <img
                                    class="file2-upload-image"
                                    src=""
                                    alt="cow-with-owner"
                                />
                            </div>
                            <div class="image2-title-wrap">
                                <button
                                    class="file-upload-btn mt-4"
                                    type="button"
                                    onclick="$('.file2-upload-input').trigger( 'click' )"
                                    style="background: #086343"
                                    >
                                    Upload
                                </button>
                                <button
                                    type="button"
                                    onclick="removeUpload2()"
                                    class="remove-image"
                                >
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </div>
                            <select name="cattle_id" id="cattle_id" class="form-control mt-3">
                                <option value="">SELECT CATTLE</option>
                                @foreach($cattle as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->cattle_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register button -->
            <div class="mb-3">
                <button type="submit" class="register-button" style="background: #086343">Register</button>
                <a href="{{ route('write.medical.report') }}" class="btn px-2 register-button" style="background: #086343">Write Report</a>
            </div>
        </form>
            
        </div>
    </div>
</div>
@endsection