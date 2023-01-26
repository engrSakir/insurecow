@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <h3>Cattle</h3>
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style" style="background: #086343; color: #ffffff !important">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">SERIAL</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Cattle Name</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Cattle Color</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Gender</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">Medical Report</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($registeredcattles as $registeredcattle)
                        <tr>
                            <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                            <!-- <td><img src="{{ url('storage/'.$registeredcattle->cow_with_owner) }}" width="50px"></td> -->
                            <td>{{ $registeredcattle->cattle->cattle_name }}</td>
                            <td>{{ $registeredcattle->cattle->cattle_color }}</td>
                            <td>{{ $registeredcattle->cattle->gender }}</td>
                            <td>
                                <!-- {{ $registeredcattle->id }} -->
                                <a href="{{ route('fdashboard.report.show', $registeredcattle->id) }}" class="btn text-dark" style="border: 1px solid black">View</a>
                            </td>
                            <td>
                                <a href="{{ route('fdashboard.report.cattle', $registeredcattle->id) }}" class="btn text-white" style="background: #086343">Details</a>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
