@extends('layouts.company')

@section('content')

    <div style="padding: 20px">
        {!! $quotation->contents !!}
    </div>

<div style="padding: 20px">
    <table class="table table-bordered border-white" style="border:1px;">
        <thead>
        <tr align="center">

            <th>Risk</th>
            <th>Premium Rate</th>
            <th>Premium on BDT</th>
        </tr>
        </thead>
        <tbody>
        @foreach(json_decode($quotation->risk) as $quots)
        <tr align="center">

            <td >{{ $quots->risk }}</td>
            <td>{{ $quots->premium}}</td>
            <td>{{$quots->bdt }} Tk</td>



        </tr>
        @endforeach
        </tbody>
        <tbody>
        <tr align="center">

            <th>Net Premium</th>
            <td></td>
            <td>{{$quotation->net_premium}} Tk</td>
        </tr>
        <tr align="center">

            <th>Vat</th>
            <td>{{$quotation->vat}}%</td>
            <td>{{$quotation->vats}} Tk</td>
        </tr>

        <tr align="center">

            <th>Total Payable</th>
            <td>=</td>
            <td>{{$quotation->total}} Tk</td>
        </tr>


        </tbody>
    </table>
</div>
@endsection
