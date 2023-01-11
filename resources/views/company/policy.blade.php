@extends('layouts.company')

@section('content')

    <div style="padding: 20px">


        <form action="{{ route('policy.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{--            <div class="mb-3">--}}
            {{--                <label for="exampleFormControlInput1" class="form-label">Logo</label>--}}
            {{--                <input type="file" name="logo" class="form-control">--}}
            {{--            </div>--}}

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Policy</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" value="{{ old('content') }}" requried></textarea>
            </div>

            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Corona Exclusion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="corona" value="{{ old('corona') }}" requried></textarea>
            </div>
            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Schedule</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="schedule" value="{{ old('schedule') }}" requried></textarea>
            </div>
            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Signature</label>
                <input type="file" name="signature" class="form-control" value="{{ old('signature') }}" requried>
            </div>

            @error('signature')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



@endsection
