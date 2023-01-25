@extends('layouts.landlayouts')
@push('acss')
    <link rel="stylesheet" href="{{asset('css/individual-services.css')}}" />
@endpush

<style>
    body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
        cursor: url('{{ asset('images/favicon.png') }}'), auto;
    }
</style>
@section('content')
    <section class="individual-insurance-section">
        <div>
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-4 entire-left-side-margin">
                    <h1 class="individual-insurance">Cattle Insurance</h1>

                    <br />
                    <div class="individual-our-services">
                        <div class="individual-our-services_p_div">
                            <p>Our Services</p>
                        </div>

                        <div>
                            <div class="individual-our-services-options">
                                <div>Cattle Insurance</div>
                                <div>
                                    <i
                                        class="fas fa-arrow-right individual-our-services_arrow"
                                    ></i>
                                </div>
                            </div>

                            <div class="individual-our-services-options">
                                <div>Crop Insurance</div>
                                <i
                                    class="fas fa-arrow-right individual-our-services_arrow"
                                ></i>
                            </div>

                            <div class="individual-our-services-options">
                                <div>Life Insurance</div>
                                <i
                                    class="fas fa-arrow-right individual-our-services_arrow"
                                ></i>
                            </div>

                            <div class="individual-our-services-options">
                                <div>Vehicle Insurance</div>
                                <i
                                    class="fas fa-arrow-right individual-our-services_arrow"
                                ></i>
                            </div>

                            <div class="individual-our-services-options">
                                <div>Health Insurance</div>
                                <i
                                    class="fas fa-arrow-right individual-our-services_arrow"
                                ></i>
                            </div>

                            <div class="individual-our-services-options">
                                <div>Travel Insurance</div>
                                <i
                                    class="fas fa-arrow-right individual-our-services_arrow"
                                ></i>
                            </div>
                        </div>

                        <div class="individual-our-services_p_div_2">
                            <p>Contact Info</p>
                        </div>

                        <div
                            class="individual-our-services-options-contact"
                            style="border: none"
                        >
                            <div><img src="{{asset('services/mobile.png')}}" alt="" /></div>
                            <div><p style="margin-left: 10px">+880 1755680807</p></div>
                        </div>

                        <div
                            class="individual-our-services-options-contact"
                            style="border: none"
                        >
                            <div><img src="{{asset('services/email.png')}}" alt="" /></div>
                            <div>
                                <p style="margin-left: 10px">inquiry@insurecow.com</p>
                            </div>
                        </div>

                        <div
                            class="individual-our-services-options-contact"
                            style="border: none"
                        >
                            <div><img src="{{asset('services/map.png')}}" alt="" /></div>
                            <div>
                                <p style="margin-left: 10px">
                                    Suite 201, Navana DH Tower, 6 Panthapath Lane
                                </p>
                            </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <button class="btn btn-success w-100">View All Services</button>
                </div>

                <div class="col-md-6 entire-right-side-margin">
                    <div class="right-side-top-margin">
                        <div class="right-side-margin">
                            <img src="{{asset('services/cow.png')}}" alt="" class="img-fluid" />
                            <br />
                            <h1 class="individual-right-side-p">Cattle Insurance</h1>
                            <br />

                            Cattle are a word for certain animals that belong to cows,
                            bulls, oxen, or calves. Cattle are the most common type of large
                            domesticated animals. Cattle are considered one of the most
                            valued possessions of the rural community. Marginal, small and
                            medium farmers earn considerable portion of their income from
                            cattle rearing. Since the livelihood of farmers depend so much
                            on them, it becomes important to get cattle insurance for
                            comprehensive coverage against cattle loss. The Cattle insurance
                            policy broadly covers death of the cattle.

                            <br /><br />
                            <p style="font-weight: bold">What is Cattle Insurance?</p>
                            Cattle insurance protects the people from financial loss
                            incurred due to the unexpected death of their cattle. Your
                            animals are considered your personal property. With cattle
                            insurance, farmers will get comprehensive protection against the
                            cattle loss.
                            <br /><br />
                            <p style="font-weight: bold">Types of Cattle Insurance</p>
                            There are three types of risks which are insured under this
                            policy:
                            <p>
                                1. Death of cattle: It covers loss of life due to accident or
                                injury and disease occurred due to surgical infection
                            </p>

                            <p>
                                2. Theft /Missing: It covers the risk of theft or missing of
                                the cattle
                            </p>

                            <p>
                                3. Permanent Disability cover: It covers the risk of permanent
                                and complete disability
                            </p>
                        </div>

                        <br />
                    </div>
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
