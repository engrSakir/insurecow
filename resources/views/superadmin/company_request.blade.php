@extends('layouts.main')

@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company Name</th>

                </tr>
                </thead>

                <tbody>
                @foreach($send as $users)
                    <tr align="center">
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->company}}</td>



                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection
