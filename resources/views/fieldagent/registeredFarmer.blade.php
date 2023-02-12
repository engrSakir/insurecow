@extends('layouts.fieldagent')
<style>
    body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
        cursor: url('{{ asset('images/favicon.png') }}'), auto;
    }
</style>

@section('content')
    <h1 class="h3 mb-4 text-gray-800 text-center p-4" style="font-family: 'Roboto Slab'">Registered Farmer</h1>




    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" style="color: #086343">Latest Added Farmers</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color:#0f6848; color: #FFFFFF ">
                    <tr align="center">
                        <th>Farmer Name</th>
                        <th>Phone</th>
                        <th>Nid</th>
                        <th>DOB</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($farmer as $farmers)
                        <tr align="center">
                            <td>{{$farmers->name}}</td>
                            <td>{{$farmers->phone}}</td>
                            <td>{{$farmers->nid}}</td>
                            <td>{{$farmers->dob}}</td>

                            <td>
                                <a href="" class="btn text-white" style="background: #086343;"><i class="fa fa-info-circle " aria-hidden="true"></i></a>

                                <a href=""  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>

                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
