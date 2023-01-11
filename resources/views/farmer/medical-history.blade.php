@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Medical History</b></h2>
            <div class="table-responsive">
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">DISEASE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">VACCINE NAME</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">NEXT VACCINE DATE</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">PDF MEDICAL REPORT</th>
                    </tr>
                </thead>
                <tbody>   
                    @foreach($vaccine as $vac)
                        @if(count($vaccine)>0)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vac->date }}</td>
                            <td>{{ $vac->disease_name }}</td>
                            <td>{{ $vac->vaccine_name }}</td>
                            <td>{{ $vac->next_vaccination_date }}</td>
                            <td>
                                @if($vac->pdf_file)
                                    <a href="{{ route('view.pdf', $vac->id) }}" class="btn text-white" target="_blank" style="background: #086343">VIEW PDF</a>
                                    @else
                                        No PDF Found
                                    @endif
                                    
                            </td>
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
