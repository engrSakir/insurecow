@extends('layouts.farmer')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Saved Medical Reports</b></h2>
            <table id="insurecow-datatable" class="display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="insurecow-datatable_info">
                <thead class="thead-style">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 47px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 211px;" aria-label="Farmer Name: activate to sort column ascending">REPORTS</th>
                        <th class="sorting" tabindex="0" aria-controls="insurecow-datatable" rowspan="1" colspan="1" style="width: 180px;" aria-label="Action: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody>   
                    <tr>
                        <td class="dtr-control sorting_1" tabindex="0">1</td>
                        <td>Here is your report of your cattle cow1,2,3,4,5,6</td>
                        <td>
                            <a href="#">
                                <button class="details-button">Details</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="dtr-control sorting_1" tabindex="0">2</td>
                        <td>Here is your report of your cattle cow1,2,3,4,5,6</td>
                        <td>
                            <a href="#">
                                <button class="details-button">Details</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection