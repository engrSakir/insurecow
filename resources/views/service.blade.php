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

    <section class="service-section">
        <div>
            <div class="services-padding">
                <div>
                    <h2 class="buy-insurance" style="font-weight: bold">
                        Services We Provide
                    </h2>
                </div>

                <div>
                    <!-- ---------------------------- services ----------------------------  -->

                    <br /><br />

                    <div class="row" style="margin: 0; padding: 0">
                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-1.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Cattle Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    We provide cattle insurance service for your farm.
                                </h1>
                            </div>
                        </div>

                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-3.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Vehicle Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    InsureCow is the best place to buy Comprehensive Vehicle
                                    Insurance in Bangladesh.
                                </h1>
                            </div>
                        </div>

                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-2.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Crop Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    We help farmers to provide crop insurance facilities.
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 0; padding: 0">
                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-4.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Health Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    InsureCow Provide best life insurance
                                </h1>
                            </div>
                        </div>

                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-5.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Health Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    Find best health insurance deals from us.
                                </h1>
                            </div>
                        </div>

                        <div class="col-md-4 grid-services-style">
                            <div>
                                <img
                                    src="{{asset('services/cow-6.png')}}"
                                    alt=""
                                    class="img-fluid"
                                />
                            </div>

                            <div>
                                <h1 class="individual_service_title">Travel Insurance</h1>
                            </div>

                            <div>
                                <h1 class="individual_service_p">
                                    Find the best travel insurance deals in Bangladesh only at
                                    InsureCow.
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!-- ---------------------------- services ----------------------------  -->
                </div>
            </div>
        </div>
    </section>


    <section
        class="third-section"
        style="background: linear-gradient(180deg, #ffffff 0%, #cbebd2 100%)"
    >
        <div class="container">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-6">
                    <p class="buy-insurance">
                        Feel free to contact <br />
                        us to learn more.
                    </p>
                    <!-- <p class="">
                      <i class="fa-solid fa-phone"></i>Contact Us<br />
                      +880 1755 680807
                    </p> -->
                    <br />
                    <!-- ---------------------- Contact part ----------------------- -->

                    <div class="d-flex align-content-center">
                        <img src="{{asset('landing/phone.png')}}" alt="" />
                        <div class="contact-text">
                            <p>Contact Us</p>
                            <p>+880 1755 680807</p>
                        </div>
                    </div>

                    <br />

                    <!-- ---------------------- Contact part ----------------------- -->

                    <!-- ---------------------- Contact part ----------------------- -->

                    <div class="d-flex align-content-center">
                        <img src="{{asset('landing/world.png')}}" alt="" />
                        <div class="contact-text">
                            <p>Suite 201, Navana DH Tower,</p>
                            <p>6 Panthapath Lane</p>
                        </div>
                    </div>

                    <br />

                    <!-- ---------------------- Contact part ----------------------- -->
                </div>
                <div
                    class="col-md-6 img form-class"
                    style="
              background-color: #ffffff;
              box-shadow: 0px 4px 60px rgba(0, 0, 0, 0.08);
              padding: 2%;
              border-radius: 15px;
            "
                >
                    <h2 class="contact-with-us-title">Contact With Us</h2>
                    <br />
                    <form>
                        <div class="row" style="margin: 0; padding: 0">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name*</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter Name"
                                    name="name"
                                    id="name-input"
                                />
                                <br />
                            </div>

                            <div class="col-md-6">
                                <label for="name" class="form-label">Number*</label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter Number"
                                    name="number"
                                />
                            </div>
                        </div>
                        <div class="row" style="margin: 0; padding: 0">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Email*</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Enter Email"
                                    name="email"
                                />
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Subject*</label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter Subject"
                                    name="subject"
                                />
                            </div>
                        </div>
                        <br />
                        <label for="name" class="form-label">Your Message*</label>
                        <textarea
                            name=""
                            id=""
                            cols="30"
                            rows="3"
                            class="form-control"
                        ></textarea>
                        <br />
                        <button
                            type="submit"
                            class="btn"
                            style="background-color: #226034; color: white"
                        >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
