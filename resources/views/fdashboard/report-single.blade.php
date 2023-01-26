@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <h3>Cattle</h3>
            <center>
                <img src="{{ asset('storage/'.$cattle->face_of_cow) }}" class="img-fluid mb-5">
            </center>
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style" style="background: #086343; color: #ffffff !important">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">SERIAL</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Disease</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Details</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Vaccine Name</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Issue Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicals as $medical)
                        <tr>
                            <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                            <td>{{ $medical->disease_name }}</td>
                            <td>{{ $medical->vaccine_name }}</td>
                            <td>{{ $medical->vaccine_name }}</td>
                            <td>{{ $medical->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
