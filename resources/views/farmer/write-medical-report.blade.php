@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-md-4">
            <h2 class="text-center mt-3"><b>Medical Info</b></h2>
            <form class="{{ route('save.write.medical.report') }}" method="post" enctype="multipart/form-data" id="writemedicalform">
                {{ csrf_field() }}

                <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="text" class="form-control" name="date" placeholder="01/12/2023" id="datepicker">
                    </div>
                    <div class="form-group">
                        <label for="cattle_id">Select Cattle:</label>
                        <select name="cattle_id" class="form-control" name="cattle_id">
                            <option value="">SELECT CATTLE</option>
                            @foreach($cattle as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cattle_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="disease_name">Enter Disease Name:</label>
                        <input type="text" class="form-control" name="disease_name" placeholder="Enter Disease Name">
                    </div>
                    <div class="form-group">
                        <label for="vaccine_name">Enter Vaccine Name:</label>
                        <input type="vaccine_name" class="form-control" name="vaccine_name" placeholder="Enter Vaccine Name">
                    </div>
                    <div class="form-group">
                        <label for="next_vaccination_date">Enter Next Vaccine Date:</label>
                        <input type="text" class="form-control" name="next_vaccination_date" placeholder="01/12/2023" id="datepicker2">
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

@endsection
