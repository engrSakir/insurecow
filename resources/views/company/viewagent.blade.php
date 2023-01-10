@extends('layouts.company')

@section('content')
    <h1 class="h3 mb-4 text-gray-800 text-center">Agent Details</h1>

    <div  style="display: flex; justify-content:right ; padding:20px;">

        <a href="{{route('company.index')}}" class="d-none d-sm-inline-block btn btn-sm text-white shadow-sm" style="background-color: #086343"><i
                class="fas fa-arrow-left fa-sm text-white-100"></i> Go Back</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Agent Name</th>
                    <th>Agent Email</th>
                    <th>Agent Phone</th>
                    <th>Agent Address</th>

                    <th>Company</th>
                    <th>Agent ID</th>

                </tr>
                </thead>

                <tbody>
                @foreach($user as $users)
                     <tr align="center">
                         <td>{{$users->name}}</td>
                         <td>{{$users->email}}</td>
                         <td>{{$users->phone}}</td>
                         <td>{{$users->adress}}</td>

                         <td>{{auth()->user()->name}}</td>
                         <td>{{$users->agent_employee_id}}</td>



                     </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
