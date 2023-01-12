@extends('layouts.company')

@section('content')
    <div  style="display: flex; justify-content:right ; padding:20px;">

        <a href="{{route('company.quotation_view')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white" style="background: #086343;"><i
                class="fas  fa-eye fa-sm text-white"></i> View Quotation</a>
    </div>
    <div style="padding: 20px">


        <form action="{{ route('quotation.update',$quotation->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            {{--            <div class="mb-3">--}}
            {{--                <label for="exampleFormControlInput1" class="form-label">Logo</label>--}}
            {{--                <input type="file" name="logo" class="form-control">--}}
            {{--            </div>--}}

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Quotation</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contents" requried  value="{{ old('contents') }}" >{{$quotation->contents}}</textarea>
            </div>

            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror
            <img src="{{ asset('storage/' . $quotation->signature) }}" alt="" style="width: 200px; height: 200px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Signature</label>
                <input type="file" name="signature" class="form-control" requried>
            </div>
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <tr align="center">
                        <th>Info.</th>
                        <th>Risk</th>
                        <th>Premium Rate</th>
                        <th>Premium on BDT</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="row_container">

                    <tr id="" align="center">
                        <td>
                            <a href="javascript:0" class="btn btn-warning"><i class="fa fa-info-circle"></i></a>
                        </td>
                        <td>
                            <input type="text" name="risk" class="form-control" placeholder="Risk" value="{{$quotation->risk}}">
                        </td>
                        <td>
                            <input type="text" name="rate" class="form-control" placeholder="Premium Rate" id="quantity" value="{{$quotation->rate}}">
                        </td>
                        <td>
                            <input type="text" name="bdt" class="form-control" placeholder="Premium on BDT" id="unitprice" value="{{$quotation->bdt}}" >
                        </td>
                        <td>
                            <input type="text" name="net_premium" class="form-control" placeholder="Total" id="total" style="cursor: pointer;" readonly value="{{$quotation->net_premium}}">
                        </td>
                        <td>
                            <a href="javascript:0" class="btn btn-danger"><i class="fa fa-minus" onclick="$.remove();"></i></a>
                        </td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td colspan="3"></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="javascript:0" class="btn btn-success addRow" onclick="addrow();"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <strong>Sub Total:</strong>
                        </td>
                        <td>
                            <input type="text" name="subtotal" class="form-control" id="subtotal" value="0.00" readonly>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <strong>VAT(%):</strong>
                        </td>
                        <td>
                            <input type="text" name="vat" class="form-control" id="vat" >
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <strong>VAT+Sub Total:</strong>
                        </td>
                        <td>
                            <input type="text" name="" class="form-control" id="vatsubtotal" value="0.00" readonly>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <strong>Stamp Duty:</strong>
                        </td>
                        <td>
                            <input type="text" name="stamp_duty" class="form-control" id="paid" value="{{$quotation->stamp_duty}}">
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <strong>Grand Total:</strong>
                        </td>
                        <td>
                            <input type="text" name="total" class="form-control" id="grandtotal" value="{{$quotation->total}}"  >
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

            <button type="submit" class="btn" style="background-color: #0f6848; color: white">Submit</button>
        </form>


    </div>



@endsection
<script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>


<script type="text/javascript">
    $(document).ready(function() {

        $("#total").click(function() {
            /*var quantity = document.getElementById("quantity").value;*/
            // var quantity = $("#quantity").val();

            var unitprice = $("#unitprice").val();
            var total = (unitprice);

            $('#total').val(total);
            $('#subtotal').val(total);

        });

        $('#vat').change(function() {
            var vInput = this.value;

            var subtotal = $("#subtotal").val();

            var vInput = ((vInput*subtotal)/100);

            var vstotal = (parseFloat(subtotal)+parseFloat(vInput)).toFixed(1);
            $('#vatsubtotal').val(vstotal);
        });

        $('#paid').change(function() {
            var pInput = this.value;
            var vatsubtotal = $("#vatsubtotal").val();

            // if((pInput < vatsubtotal) || (pInput <= vatsubtotal)){
            var stamp= $('#paid').val();


            // $('#due').val(dInput);

            var total = $("#total").val();
            var subtotal = $("#subtotal").val();
            var gtInput = (parseFloat(vatsubtotal)+parseFloat(stamp)).toFixed(1);
            $('#grandtotal').val(gtInput);



        });

    });

</script>
