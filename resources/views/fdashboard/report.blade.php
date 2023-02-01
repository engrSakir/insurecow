@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            @if( Session::has( 'report' ))
                <div class="alert text-white mt-5" style="background: #226034">
                    {{ Session::get( 'report' ) }}
                </div>
            @endif
            @if( Session::has( 'report1' ))
                <div class="alert text-white mt-5" style="background: #226034">
                    {{ Session::get( 'report1' ) }}
                </div>
            @endif
            <!-- Content Row -->
            <h3>Reports 
                <a data-toggle="modal" data-target="#exampleModalCenter1" class="btn float-right text-dark" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border-radius: 5px;">New Report</a>
            </h3>
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
                            @if($registeredcattle->cattle)
                                <td>{{ $registeredcattle->cattle->cattle_name }}</td>
                                <td>{{ $registeredcattle->cattle->cattle_color }}</td>
                                <td>{{ $registeredcattle->cattle->gender }}</td>
                            @endif
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

                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle" align="center"><center>Add New Report</center></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('report.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Amount:</label>
                                    <input type="number" name="amount" class="form-control">
                                </div> -->
                                <div class="form-group">
                                    <label for="">Cattle:</label>
                                    <select name="cattle_id" class="form-control">
                                        <option value="">SELECT CATTLE</option>
                                        @foreach($cattles as $cattle)
                                            <option value="{{ $cattle->id }}">{{ $cattle->cattle_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="">SELECT EXPENSE CATEGORY:</label>
                                    <select name="category" class="form-control">
                                        <option value="">SELECT EXPENSE CATEGORY</option>
                                        <option value="medical">MEDICAL</option>
                                        <option value="food">FOOD</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="">Vet Report:</label>
                                    <input type="file" name="pdf_file" class="form-control" accept="image/jpeg,image/gif,image/png,application/pdf">
                                </div>
                                <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Details:</label>
                                    <textarea name="details" row="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group float-right">
                                    <button type="button" style="color: #000000; border: 2px solid #000000" class="btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn text-white" style="background: #086343">Create Income</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
