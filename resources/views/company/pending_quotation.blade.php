@extends('layouts.company')

@section('content')

    <h1 class="h3 mb-4 text-gray-800 text-center"> Pending Quotation List</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">

                    <th>Buying Price</th>
                    <th>Insurance period</th>
                    <th>Accidental Mortality</th>
                    <th>Additional Coverage</th>
                    <th>Status</th>
                    <th>Action</th>


                </tr>
                </thead>

                <tbody>
                @foreach($show as $shows)
                    <tr align="center">
                        <td>{{$shows->buying_price}}</td>
                        <td>{{$shows->insurance_period}}</td>
                        <td>{{$shows->accidental_mortality}}</td>
                        <td>{{ $shows->additionalcoverages }}</td>
                        <td>{{$shows->status}}</td>

                        <td><a href="{{route('company.approved',$shows->id)}}" class="btn text-white" style="background: #086343;"><i class="fa fa-check " aria-hidden="true"></i></a>

                        <a href="{{route('company.canceled',$shows->id)}}"  class="btn btn-danger" ><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection
