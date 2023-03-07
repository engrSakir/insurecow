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
                <label for="exampleFormControlInput1" class="form-label">Policy Upload</label>
                <input type="file" name="policy" class="form-control" value="{{ old('policy') }}" requried>
            </div>

            @error('signature')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



@endsection
