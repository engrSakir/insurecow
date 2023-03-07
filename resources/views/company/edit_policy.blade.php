@extends('layouts.company')

@section('content')
    <div  style="display: flex; justify-content:right ; padding:20px;">

{{--        <a href="{{route('company.policy_view')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white" style="background: #086343;"><i--}}
{{--                class="fas  fa-eye fa-sm text-white"></i> View Policy</a>--}}
    </div>
    <div style="padding: 20px">


        <form action="{{ route('policy.update',$policy->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}




            <div class="mb-3">
{{--                <img src="{{ asset('storage/' . $policy->signature) }}" alt="" style="width: 200px; height: 200px">--}}
                <iframe src="{{ asset('storage/' . $policy->policy) }}" height="1000px" width="1000px" align="center" frameborder="0"></iframe>

                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="file" name="policy" class="form-control">
            </div>

            @error('signature')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



@endsection
