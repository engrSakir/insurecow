@extends('layouts.company')

@section('content')
<h1 class="h3 mb-4 text-gray-800 text-center">History</h1>
<div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">

                                    <th>Company Name</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>

                            <tbody>
                         @foreach($user as $users)
                                <tr align="center">
                                    <td>{{$users->name}}</td>
                                    <td>{{$users->created_at}}</td>

                                    <td><a href="#" class="btn text-white" style="background: #086343;"><i class="fa fa-download" aria-hidden="true"></i></a></td>

                                    <td><a href="{{route('company.delete',$users->id)}}"  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
@endsection
