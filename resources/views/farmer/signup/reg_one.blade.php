@extends('layouts.master')
@section('content')

<div class="card-block p-2 card-block-middle mb-4">
    <h4 class="ms-4"> Attachment </h4>
</div>

<div class="card-block p-2 card-block-down mb-4">
    <div class="row px-4 mt-4 mb-3">
        <div class="col-md-4 mb-5">
            <p>Owner NID : </p>
            <div class="file-upload">

                <div class="pdf-upload-wrap">
                    <input class="pdf-upload-input" type='file' onchange="readpdfURL(this);"
                    id="myPdf" accept="application/pdf, application/vnd.ms-excel" />
                    <img class="img-card" src="{{asset('images/pdf.png')}}" />
                </div>

                <div class="pdf-upload-content">
                    <embed class="pdf-upload-image" src="" alt=""/>

                </div>
                <div class="pdf-title-wrap">
                    <button class="file-upload-btn mt-4" type="button"
                        onclick="$('.pdf-upload-input').trigger( 'click' )">Upload</button>
                    <button type="button" onclick="removepdfUpload()" class="remove-image">
                        <i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <p>Vet Certificate : </p>
            <div class="file-upload">

                <div class="pdf-upload-wrap">
                    <input class="pdf-upload-input" type='file' onchange="readpdfURL(this);"
                    id="myPdf" accept="application/pdf, application/vnd.ms-excel" />
                    <img class="img-card" src="{{asset('images/pdf.png')}}" />
                </div>

                <div class="pdf-upload-content">
                    <embed class="pdf-upload-image" src="" alt=""/>

                </div>
                <div class="pdf-title-wrap">
                    <button class="file-upload-btn mt-4" type="button"
                        onclick="$('.pdf-upload-input').trigger( 'click' )">Upload</button>
                    <button type="button" onclick="removepdfUpload()" class="remove-image">
                        <i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-5">
            <p>Chariman Certificate : </p>
            <div class="file-upload">

                <div class="pdf-upload-wrap">
                    <input class="pdf-upload-input" type='file' onchange="readpdfURL(this);"
                    id="myPdf" accept="application/pdf, application/vnd.ms-excel" />
                    <img class="img-card" src="{{asset('images/pdf.png')}}" />
                </div>

                <div class="pdf-upload-content">
                    <embed class="pdf-upload-image" src="" alt=""/>

                </div>
                <div class="pdf-title-wrap">
                    <button class="file-upload-btn mt-4" type="button"
                        onclick="$('.pdf-upload-input').trigger( 'click' )">Upload</button>
                    <button type="button" onclick="removepdfUpload()" class="remove-image">
                        <i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            </div>
           
        </div>
    </div>
</div>
<hr><br>
<div style="display: flex; justify-content:space-between">
    <label for="">Issuing Date: </label>
    <input type="Date" class="">
    <label for="">Period Of Insurance: </label>
    <select class="" name="" >
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="1">One</option>
        <option value="1">One</option>

      </select>
</div>
<div>
    <input type="submit" value="Next" class="file-upload-btn mt-4">

</div><br>

@endsection