@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-3"><b>Write Here about your cattle medical report:</b></h2>
            <form class="{{ route('save.write.medical.report') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- <div class="form-group">
                    <textarea name="write_report" placeholder="Write a brief description about your cattle medical report..." class="form-control" rows="10"></textarea>
                </div> -->

                <table class="table">
                    <thead class="table-dark">
                        <th class="text-center">Vaccination Date <i style="color: #086343" class="fas fa-info-circle" title="Enter Your Vaccination Date"></i></th>
                        <th class="text-center">Next Vaccination Date <i style="color: #086343" class="fas fa-info-circle" title="Enter Your New Vaccination Date"></i></th>
                        <th class="text-center">Health Issue <i style="color: #086343" class="fas fa-info-circle" title="Enter cattle Health Issue"></i></th>
                        <th><a href="#" class="btn btn-info addRow text-center">+</a></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="date" class="form-control" required name="vaccination_date[]"></td>
                            <td><input type="date" class="form-control" required name="next_vaccination_date[]"></td>
                            <td><input type="text" class="form-control" required name="health_issue[]" placeholder="Enter Health Issue"></td>
                            <td><a href="#" class="btn btn-danger text-center">-</a></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Register button -->
                <div class="px-4 py-5">
                    <button type="submit" class="register-button">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $('.addRow').on('click', function(){
        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
                    '<td><input type="date" class="form-control" name="vaccination_date[]"></td>'+
                    '<td><input type="date" class="form-control" name="next_vaccination_date[]"></td>'+
                    '<td><input type="text" class="form-control" name="health_issue[]" placeholder="Enter Health Issue"></td>'+
                    '<td><a href="#" class="btn btn-danger text-center remove">-</a></td>'+
                '</tr>';

        $('tbody').append(tr);
    }

    $('tbody').on('click', '.remove', function(){
        $(this).parent().parent().remove();
    });


</script>

@endsection
