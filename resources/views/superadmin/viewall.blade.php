@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800 text-center">User Details</h1>

    <div  style="display: flex; justify-content:right ; padding:20px;">

        <a href="{{route('superadmin.history')}}" class="d-none d-sm-inline-block btn btn-sm text-white shadow-sm" style="background-color: #086343"><i
                class="fas fa-arrow-left fa-sm text-white-100"></i> Go Back</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>

                    <th>Role</th>


                </tr>
                </thead>

                <tbody>

                    <tr align="center">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->adress}}</td>
                        <td>{{$user->role_1}}</td>




                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
