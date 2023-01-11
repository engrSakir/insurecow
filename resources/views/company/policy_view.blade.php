@extends('layouts.company')

@section('content')
<h2 align="center"> <img src="{{ asset('storage/' .$profile->image ) }}" alt="">
</h2>
    <div style="padding: 20px">
        {!! $policy->content !!}


    </div>
<h2 align="center">Coronavirus Exclusion</h2>

    <div style="padding: 20px">

        {!! $policy->corona !!}


    </div>
<h2 align="center">Schedule</h2>

    <div style="padding: 20px">

        {!! $policy->schedule !!}

    </div>

@endsection
