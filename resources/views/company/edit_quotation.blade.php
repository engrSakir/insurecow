@extends('layouts.company')

@section('content')

    <div style="padding: 20px">


        <form action="{{ route('quotation.update',$quotation->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            {{--            <div class="mb-3">--}}
            {{--                <label for="exampleFormControlInput1" class="form-label">Logo</label>--}}
            {{--                <input type="file" name="logo" class="form-control">--}}
            {{--            </div>--}}

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contents" requried >{{$quotation->contents}}</textarea>
            </div>

            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <img src="{{ asset('storage/' . $quotation->signature) }}" alt="" style="width: 200px; height: 200px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Signature</label>
                <input type="file" name="signature" class="form-control" requried>
            </div>


            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



@endsection
