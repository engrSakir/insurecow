@extends('layouts.master')

@section('content')
<section class="mt-4 mb-5">
<h2 class="text-center mt-3"><b>Registered Cattles</b></h2>   
<table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
    <thead class="thead-style">
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner Image</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner First Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Owner Last Name</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Cattle Weight</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Thana: activate to sort column ascending">Cattle Color</th>
            <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">Action</th>
        </tr>
    </thead>
    <tbody> 
            @foreach($registeredcattles as $registeredcattle)    
            <tr>
                <td class="dtr-control sorting_1" tabindex="0">{{ $registeredcattle->id }}</td>
                <td><img src="{{ url('storage/'.$registeredcattle->cow_with_owner) }}" width="50px"></td>
                <td>{{ $registeredcattle->firstname }}</td>
                <td>{{ $registeredcattle->lastname }}</td>
                <td>{{ $registeredcattle->weight }}</td>
                <td>{{ $registeredcattle->cattle_color }}</td>
                <td>
                    <a href="#">
                        <button class="details-button">Details</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection