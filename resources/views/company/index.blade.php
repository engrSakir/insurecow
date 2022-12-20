@extends('layouts.main')

@section('content')
<!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Latest Added Company</h6>
                </div>
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
                                    
                                    <td><button  class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                    <td><a href="{{url('company/delete',$users->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    
                                </tr> 
                               
                            @endforeach   
                              
    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
@endsection