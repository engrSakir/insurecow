@extends('layouts.company')

@section('content')
    <h1 class="h3 mb-4 text-gray-800 text-center">View Package</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Package Name</th>
                    <th>Price Range</th>
                    <th>Insurance Period</th>
                    <th>Coverage</th>
                    <th>Premium Amount</th>
                    <th>Lowest Amount</th>
                    <th>Highest Amount</th>

                    <th>Action</th>


                </tr>
                </thead>

                <tbody>
                @foreach($show as $shows)
                    <tr align="center">
                        <td>{{$shows->name}}</td>
                        <td>{{$shows->price_range}}</td>
                        <td>{{$shows->insurance_period}}</td>
                        <td>{{$shows->coverage}}</td>
                        <td>{{$shows->premium_amount}}</td>
                        <td>{{$shows->lowest}}</td>
                        <td>{{$shows->highest}}</td>



                        <td class="col-md-2">
                            <a href="{{route('package.edit',$shows->id)}}" class="btn text-white" style="background: #086343;"><i class="fa fa-edit " aria-hidden="true"></i></a>

                            <a href="{{route('company.deletePackage',$shows->id)}}"  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>

                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
