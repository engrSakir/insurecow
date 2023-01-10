@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center mt-3"><b>Edit Expenses</b></h2>
        <div class="col-lg-4 offset-lg-4">
        <form action="{{ route('expenses.update', $expense->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')        
            @csrf
            <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="text" class="form-control @error('date') is-invalid @enderror" name="date" id="datepicker" placeholder="01/02/2023" value="{{ $expense->date }}" disabled>
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cattle_id">Select Cattle:</label>
                        <select name="cattle_id" class="form-control custom-select @error('cattle_id') is-invalid @enderror" name="cattle_id" value="{{ $expense->cattle_id }}" disabled>    
                            <option value="{{ $expense->cattle_id }}">{{ $expense->cattle->cattle_name }}</option>
                        </select>
                        @error('cattle_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount">Enter Cost Amount:</label>
                        <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="Enter Cost Amount" value="{{ $expense->amount }}">
                        @error('amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cost_note">Purpose of Cost:</label>
                        <input type="text" class="form-control @error('cost_note') is-invalid @enderror" name="cost_note" placeholder="Purpose of Cost:" value="{{ $expense->cost_note }}" disabled>
                        @error('cost_note')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>    

@endsection