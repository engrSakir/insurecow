@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Expense History</b></h2>
            <div class="table-responsive">
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">CATTLE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">AMOUNT</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">PURPOSE</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach($history as $his)
                        @if(count($history)>0)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $his->date }}</td>
                            <td>{{ $his->cattle->cattle_name }}</td>    
                            <td>{{ $his->amount }}</td>    
                            <td>{{ $his->cost_note }}</td>    
                        </tr>
                        @else
                            <tr>
                                <td>No Reports Found</td>    
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection
