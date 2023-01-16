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

                </tr>
                </thead>

                <tbody>

                    <tr align="center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td><a href="" class="btn text-white" style="background: #086343;"><i class="fa fa-check " aria-hidden="true"></i></a>

                        <a href=""  class="btn btn-danger" onclick="confirmation(event)"><i class="fa fa-times" aria-hidden="true"></i></a></td>

                    </tr>




                </tbody>
            </table>
        </div>
    </div>

@endsection
