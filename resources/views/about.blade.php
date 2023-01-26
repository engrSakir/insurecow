@extends('layouts.landlayouts')
@push('csss')
    <link rel="stylesheet" href="{{asset('css/service.css')}}" />
@endpush

<style>
    body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
        cursor: url('{{ asset('images/favicon.png') }}'), auto;
    }
</style>
@section('content')

    <section class="about-section">
        <div class="about-section-wrapper">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-4">
                    <div class="about_img_div">
                        <img src="{{asset('images/tasvir_sir.png')}}" alt="ceo" class="img-fluid" />
                    </div>

                    <div>
                        <p class="about_image_title">Tasvir A Faheem</p>
                    </div>

                    <div>
                        <p class="about_image_title_p">
                            “InsureCow is the friendliest and most efficient company I have
                            ever used. The whole thing takes time to introduce the product
                            and as a result puts forward only the best opportunities that
                            really suit you.”
                        </p>
                    </div>
                </div>

                <div class="col-md-6 about-second-section-mobile-spacing">
                    <div>
                        <p class="about_image_title_h1">About InsureCow</p>
                        <br />
                        <p class="about_image_title_p">
                            InsureCow offers a 360° technology-powered cattle insurance and
                            wellbeing monitoring platform. Our solutions create a digital
                            and robust bridge between farmers, SMEs, NGOs, Insurers, and
                            financial institutions.

                            <br />
                            <br />

                            We ensure a sustainable and resilient agrarian future for our
                            nation by increasing the farmers’ access to finance, technology
                            & information, which inevitably leads to their financial
                            security.

                            <br />
                            <br />

                            We accomplish our goals by letting the farmers, NGOs and other
                            financial institutions register their cattle for insurance via
                            our online portal, who are then able to visualize their policy
                            progression in our state-of-the-art Analytics Hub. And through
                            our Payment Gateway System, it is now easier than ever for
                            premiums to be paid and insurance to be claimed
                        </p>
                    </div>

                    <br />
                    <div>
                        <button class="btn" style="background-color: #0f6848;color: #FFFFFF">Contact Us</button>
                        <button class="btn btn-outline-success" style="">
                            Our Works
                        </button>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>

@endsection
