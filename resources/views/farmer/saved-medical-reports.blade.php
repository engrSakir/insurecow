@extends('layouts.farmer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Saved Medical Reports</b></h2>
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">CATTLE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">DISEASE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">VACCINE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">NEXT VACCINE DATE</th>
                        
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">PDF MEDICAL REPORT</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach($reports as $repo)
                    @if(count($reports)>0)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $repo->date }}</td>
                        <td>{{ $repo->cattle->cattle_name }}</td>    
                        <td>{{ $repo->disease_name }}</td>    
                        <td>{{ $repo->vaccine_name }}</td>    
                        <td>{{ $repo->next_vaccination_date }}</td>  
                        <td>@if($repo->pdf_file)
                                    <a href="{{ route('view.pdf', $repo->id) }}" class="btn" target="_blank">VIEW PDF</a>
                                    @else
                                        No PDF Found
                                    @endif</td>  
                    </tr>
                    @else
                        <tr>
                            <td>No Reports Found</td>    
                        </tr>
                    @endif
                    @endforeach
                    <!-- <td>
                            <a href="#">
                                <button class="details-button">Details</button>
                            </a>
                        </td> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection