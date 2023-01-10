@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center mt-3"><b>Expenses</b></h2>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="col-lg-4">
        <form class="{{ route('farmer.expense.save') }}" method="post" enctype="multipart/form-data">
            @csrf        
            <div class="card p-5" style="background: rgba(79, 172, 35, 0.25);">
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="text" class="form-control @error('date') is-invalid @enderror " name="date" id="datepicker" placeholder="01/02/2023" value="{{ old('date') }}">
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cattle_id">Select Cattle:</label>
                        <select name="cattle_id" class="form-control custom-select @error('cattle_id') is-invalid @enderror" name="cattle_id" value="{{ old('cattle_id') }}">
                            <option value="">SELECT CATTLE</option>
                            @foreach($cattle as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cattle_name }}</option>
                            @endforeach
                        </select>
                        @error('cattle_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount">Enter Cost Amount:</label>
                        <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="Enter Cost Amount" value="{{ old('amount') }}">
                        @error('amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cost_note">Purpose of Cost:</label>
                        <input type="text" class="form-control @error('cost_note') is-invalid @enderror" name="cost_note" placeholder="Purpose of Cost:" value="{{ old('cost_note') }}">
                        @error('cost_note')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" style="display:block; background: #086343" class="btn w-100 text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
        <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                @foreach($expense as $exp)
                <tr>
                    <td class="p-5">
                            <strong>Cattle Name </strong><br>{{ $exp->cattle->cattle_color }}
                    </td>
                    <td class="p-5">
                        <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">
                            <strong>Price </strong><br>{{ $exp->cattle->price }}
                        </div>
                    </td>
                    <td class="p-5">
                    <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">
                        <strong>Expense </strong><br>{{ $exp->amount }}
                    </div>
                    </td>
                    <td class="p-5">
                    <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">    
                        <strong>Total </strong><br>{{ $exp->cattle->price + $exp->amount }}
                    </div>
                    </td>
                    <td class="p-5">
                    <div style="background: #D3EAC8; padding: 20px; border-radius: 10px;">    
                        <div class="btn-group">
                        <a href="{{ route('expenses.edit', $exp->id) }}" class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('expense.destroy', $exp->id) }}" class="btn-sm btn-danger" onclick="alert('Are you sure to delete???')"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
    </div>    
</div>    

@endsection