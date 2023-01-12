@extends('layouts.company')

@section('content')

    <div style="padding: 20px">
        {!! $quotation->contents !!}
    </div>

<div style="padding: 20px">
    <table class="table">
        <thead>
        <tr>

            <th scope="col">Risk</th>
            <th scope="col">Premium Rate</th>
            <th scope="col">Premium on BDT</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{$quotation->risk}}</td>
            <td>{{$quotation->rate}}</td>
            <td>{{$quotation->bdt}}</td>
        </tr>
        <tr>

            <td>Net Premium</td>
            <td></td>
            <td>{{$quotation->net_premium}} Tk</td>
        </tr>
        <tr>

            <td>Vat</td>
            <td>{{$quotation->vat}}%</td>
            <td>120 Tk</td>
        </tr>
        <tr>

            <td>Stamp Duty</td>
            <td></td>
            <td>{{$quotation->stamp_duty}} Tk</td>
        </tr>
        <tr>

            <td>Total Payable</td>
            <td></td>
            <td>{{$quotation->total}} Tk</td>
        </tr>
      

        </tbody>
    </table>
</div>
@endsection
