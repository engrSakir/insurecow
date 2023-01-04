@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Upload Cattle Medical Report</b></h2>
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
                        </div>
                    </div>
                </div>
            </div>

            <hr/>

            <!-- Register button -->
            <div class="px-4 py-5">
                <button type="submit" class="register-button">Register</button>
                <a href="{{ route('write.medical.report') }}" class="px-2 register-button">Write Report</a>
            </div>
        </form>
            
        </div>
    </div>
</div>
@endsection