@extends('layouts.farmer_onboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <a href="{{ route('farmer.index') }}" class="float-start mb-3 p-3 text-dark" style="background: linear-gradient(268.09deg, #C5EAD5 24.79%, #FFFFFF 99.54%);border-radius: 20px;"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
            <img src="https://thumbs.dreamstime.com/z/health-protection-shield-logo-design-vector-template-medical-insurance-company-170953383.jpg" alt="" class="img-fluid">
            <center>
                <span class="text-center mt-3">COVERAGE</span><br>
                <span class="text-center mt-3">BDT. 5 Lakhs</span>
            </center>
            <a href="#" class="btn w-100 btn-danger mt-3">Request Now</a>
            <div class="table-reponsive mt-3">
            <table class="table">
            <tbody>
                <tr>
                    <th><strong>Insurance Provider</strong></th>
                    <td>Health Protect</td>
                </tr>
                <tr>
                    <th><strong>Policy Duration</strong></th>
                    <td>1 year</td>
                </tr>
                <tr>
                    <th><strong>Number of Cattle Covered</strong></th>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class="col-md-8 mt-5">
        
        <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-auto">
            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link link-secondary" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" href="#">Coverages</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-secondary" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" href="#">Description</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-secondary active" id="album-tab" data-bs-toggle="tab" data-bs-target="#album" href="#">Claim Process</a>
                </li>
            </ul>
            
            <div class="tab-content pt-3" id="tabContent">
                <div class="tab-pane fade p-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                Coverage against in-patient treatment in a registered hospital
0 days waiting period.

Hospitalization (often referred to as IPD: In-Patient Department) coverage provides payments against expenses during in-hospital treatment. These expenses usually include room rent, consultant's fees, investigation charges, prescribed medicine costs, surgical fees, and relevant ancillary service fees.

Ancillary services may include labor room services, post-operative care facilities, oxygen therapy, skilled nursing services, intensive care facility, blood transfusions, ambulance services, dressing, nebulization, procedural services, tests other than routine investigations, etc.
                </div>
                
                <div class="tab-pane  p-5 fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                Coverage against in-patient treatment in a registered hospital
0 days waiting period.

Hospitalization (often referred to as IPD: In-Patient Department) coverage provides payments against expenses during in-hospital treatment. These expenses usually include room rent, consultant's fees, investigation charges, prescribed medicine costs, surgical fees, and relevant ancillary service fees.

Ancillary services may include labor room services, post-operative care facilities, oxygen therapy, skilled nursing services, intensive care facility, blood transfusions, ambulance services, dressing, nebulization, procedural services, tests other than routine investigations, etc.
                </div>
                
                <div class="tab-pane p-5 fade show active" id="album" role="tabpanel" aria-labelledby="album-tab">
                Coverage against in-patient treatment in a registered hospital
0 days waiting period.

Hospitalization (often referred to as IPD: In-Patient Department) coverage provides payments against expenses during in-hospital treatment. These expenses usually include room rent, consultant's fees, investigation charges, prescribed medicine costs, surgical fees, and relevant ancillary service fees.

Ancillary services may include labor room services, post-operative care facilities, oxygen therapy, skilled nursing services, intensive care facility, blood transfusions, ambulance services, dressing, nebulization, procedural services, tests other than routine investigations, etc.
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>
@endsection