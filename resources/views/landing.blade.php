<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insurecow</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/landing.css')}}" />

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        crossorigin="anonymous"
        defer
        src="https://unpkg.com/swiper/swiper-bundle.min.js"
    ></script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link
        crossorigin="anonymous"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="{{ asset('/css/landing_styles.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"
    />

    <style>
        body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
            cursor: url('{{ asset('images/favicon.png') }}'), auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>
</head>
<body>
<!-- --------------------------------------------- first container --------------------------------------------- -->

<section class="first-section">
    <div>
        <!-- ------------------------------------------ Navbar ------------------------------------------ -->

        <nav
            class="navbar navbar-expand-lg navbar-light"
            style="background-color: #d7eccb"
        >
            <a href="{{ url('/') }}"><img src="{{asset('landing/logo.png')}}" alt="" /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link nav-font" href="#z"
                        >Home <span class="sr-only">(current)</span></a
                        >
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href=""
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Our Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{url('service')}}">Services</a>
                                <a class="dropdown-item" href="{{url('individual_service')}}">Individual Service</a>
                                <div class="dropdown-divider"></div>
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}

                        </div>
                    </li>
                    <li class="nav-item nav-font">
                        <a class="nav-link" href="{{url('about')}}">About Us</a>
                    </li>

                    <li class="nav-item nav-font">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>

                @if(auth()->user())
                <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                  $profile = App\FarmerProfile::where('user_id', Auth::user()->id)->first();
                                @endphp
                              @if($profile)
                                <img src="{{ asset('/storage/'.$profile->image) }}" class="img-fluid bs-img" width="20px">
                              @else
                                <img src="{{ asset('/images/profile.png') }}" class="img-fluid bs-img" width="20px">
                              @endif
                              <span class="font-size">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>

                                <li><a class="dropdown-item" href="{{ route('log_out') }}">Sign Out</a></li>
                            </ul>
                        </li>
                @else
                    <a href="{{route('farmer.login')}}" class="btn mr-sm-2 btn-light">Sign in</a>
                    <a href="{{route('register')}}" class="btn " style="background-color: #0f6848;color: #FFFFFF">Sign Up</a>
                @endif
            </div>
        </nav>

        <!-- ------------------------------------------ Navbar ------------------------------------------ -->
    </div>
</section>

<!-- --------------------------------------------- first container --------------------------------------------- -->

<!-- --------------------------------------------- second container --------------------------------------------- -->

<section class="second-section">
    <div class="row" style="margin: 0; padding: 0">
        <div class="col-md-6">
            <div class="left-side">
                <br />
                <span class="buy-insurance">
                    Buy <span style="font-weight: 600;color: #0f6848">Insurance </span>for your cattle in a Smart Way, with One Click
            </span>
                <br /><br />
                <p>
                    Live up your life!, While knowing that your cattle and other
                    properties are protected by us.
                </p>
                <br />
                <div>
                    <a href="{{route('send.index')}}" class="btn " style="background-color: #0f6848; color: #FFFFFF">Get a Quote</a>
                    <span class="or-span">Or</span>

                    <button class="btn btn-light contact-us-mobile-button-alignment" style="border: #0f6848;border-style: inset;">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="left-side right-side-mobile">
                <img src="{{asset('landing/cow_image.png')}}" alt="" class="img-fluid" />
            </div>
        </div>
    </div>

    <!-- ------------------------------------------ Services  ----------------------------------------- -->

    <div class="services">
        <div class="services-1-row">
            <div>
                <div class="services-box-style">
                    <div class="services-img">
                        <img src="{{asset('landing/cow.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <a href="{{route('onboard.index')}}"><p class="services-p">Cattle Insurance</p></a>
                    </div>
                </div>
                <br />
            </div>

            <div>
                <div class="services-box-style">
                    <div class="services-img">
                        <img src="{{asset('landing/crop.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="services-p">Crop Insurance</p>
                    </div>
                </div>
                <br />
            </div>

            <div>
                <div class="services-box-style">
                    <div class="services-img">
                        <img src="{{asset('landing/life.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="services-p">Life Insurance</p>
                    </div>
                </div>
                <br />
            </div>

            <div>
                <div class="services-box-style">
                    <div class="services-img">
                        <img src="{{asset('landing/vehicle.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="services-p">Vehicle Insurance</p>
                    </div>
                </div>
                <br />
            </div>

            <div>
                <div class="services-box-style">
                    <div class="services-img">
                        <img src="{{asset('landing/health.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="services-p">Health Insurance</p>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>

    <!-- ------------------------------------------ Services ------------------------------------------ -->
</section>

<!-- --------------------------------------------- second container --------------------------------------------- -->

<!-- --------------------------------------------- third container --------------------------------------------- -->

<section class="third-section">
    <div>
        <!-- ----------------------------------- why choose our service ----------------------------------- -->

        <div>
            <h4 class="third-section_title" style="font-size: 30px;">Why Choose Our Services?</h4>
            <br />
            <p class="third-section_p">
                You can customise your insurance policy and choose to safeguard
                <br />
                exactly what you want. We’ll take care of the rest.
            </p>
        </div>

        <div class="left-side">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-4">
                    <img src="{{asset('landing/side-1.png')}}" alt="" class="img-fluid" />
                    <div>
                        <p class="third-section_item_title">Compare All Quotes</p>
                        <p class="third-section_item_p">
                            Never compare your inside with <br />
                            somebody else's outside
                        </p>
                        <br />
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{asset('landing/side-2.png')}}" alt="" class="img-fluid" />
                    <div>
                        <p class="third-section_item_title">Get All Discounts</p>
                        <p class="third-section_item_p">
                            Schedule haggling sessions for <br />
                            the right time of day.
                        </p>
                        <br />
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{asset('landing/side-3.png')}}" alt="" class="img-fluid" />
                    <div>
                        <p class="third-section_item_title">Pay Online Everywhere</p>
                        <p class="third-section_item_p">
                            Online payments refer to the electronic <br />
                            exchange of currency through the internet
                        </p>
                        <br />
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------- why choose our service ----------------------------------- -->
    </div>
</section>

<!-- --------------------------------------------- third container --------------------------------------------- -->

<!-- --------------------------------------------- forth container --------------------------------------------- -->

<section class="third-section">
    <div>
        <!-- ------------------- find your best insurance company ----------------------- -->

        <div>
            <h4 class="third-section_title" style="font-size: 30px;">Find Your Best Insurance Company</h4>
            <br />
            <p class="third-section_p">
                You can customise your insurance policy and choose to safeguard
                <br />
                exactly what you want. We’ll take care of the rest.
            </p>
        </div>

        <div class="left-side">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-4">
                    <div class="services-img">
                        <img src="{{asset('landing/crop-1.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="third-section_item_title">
                            Crop Insurance <br />
                            Company
                        </p>
                        <p class="third-section_item_p">
                            Crop insurance is purchased by agricultural producers.
                        </p>
                        <br />
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-success">View Details</button>
                        </div>
                        <br />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="services-img">
                        <img src="{{asset('landing/crop-2.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="third-section_item_title">
                            Cattle Insurance <br />
                            Company
                        </p>
                        <p class="third-section_item_p">
                            The Cattle insurance policy broadly covers death of the
                            cattle.
                        </p>
                        <br />
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-success">View Details</button>
                        </div>
                        <br />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="services-img">
                        <img src="{{asset('landing/crop-3.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div>
                        <p class="third-section_item_title">
                            Life Insurance <br />
                            Company
                        </p>
                        <p class="third-section_item_p">
                            Life Insurance can be defined as a contract between an
                            insurance policy holder
                        </p>
                        <br />
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-success">View Details</button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>

        <!-- --------------------- find your best insurance company --------------------- -->
    </div>
</section>

<!-- --------------------------------------------- forth container --------------------------------------------- -->

<!-- --------------------------------------------- forth point one container --------------------------------------------- -->



<!-- --------------------------------------------- forth point one container --------------------------------------------- -->

<!-- --------------------------------------------- fifth container --------------------------------------------- -->

<section class="third-section">
    <div>
        <!-- ------------------- Team Members ----------------------- -->

        <div>
            <h4 class="third-section_title" style="font-size: 30px;">Team Members</h4>
            <br />
            <p class="third-section_p">Here is our team members</p>
        </div>

        <div class="left-side">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/tasvir.png')}}" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <p class="third-section_item_title">Tasvir A. Faheem</p>
                            <p class="third-section_item_p">
                                Chief Executive Officer (CEO)
                            </p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/tasvir/" target="_blank"
                                ><img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/nasim.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Nurunnassa Choudury</p>
                            <p class="third-section_item_p">Chief Operating Officer</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/nurunnassa-nasim-b51846b1/" target="_blank">
                                    <img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/per_man.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Ali Tareque Parvez</p>
                            <p class="third-section_item_p">Chief Commercial Officer</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href=""
                                ><img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid" target="_blank"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/tahmid.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Tahmid Ferdous</p>
                            <p class="third-section_item_p">Technical Product Owner</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/tahmid-ferdous-7a66b8134/" target="_blank">
                                    <img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>

            <br />

            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/rahul.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Rahul Deb</p>
                            <p class="third-section_item_p">UI/UX Designer</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/rahul-d1212/" target="_blank"
                                ><img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/rafin.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Ahsan Rafin</p>
                            <p class="third-section_item_p">Full-stack Developer</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/ahsanrafin/" target="_blank">
                                    <img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-3">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/mithun.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">Mithun Sutradhar</p>
                            <p class="third-section_item_p">Full-stack Developer</p>
                            <br />
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="https://www.linkedin.com/in/mithun-sutradhar-1b416a181/" target="_blank"
                                ><img src="{{asset('landing/vector.png')}}" alt="" class="img-fluid"
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="col"></div>
            </div>
        </div>

        <!-- --------------------- Team Members --------------------- -->
    </div>
</section>

<!-- --------------------------------------------- fifth container --------------------------------------------- -->
<div>
    <div class="mx-auto text-center">
        <h4 class="third-section_title" style="font-size: 30px;">Clients Testimonials</h4>
        <p class="mt-4 text-dark-500">
            Here are some reviews given by our honorable clients, who are
            <br />benefited with our services.
        </p>
    </div>
    <section>
        <div class="px-4 py-16 mx-auto sm:px-6 container">
            <div class="swiper-container !overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote
                            class="p-8 bg-gray-100"
                            style="
                    background: linear-gradient(
                      180deg,
                      #c5ead5 0%,
                      #dbedc9 100%
                    );
                    border-radius: 10px;
                  "
                        >
                            <div class="flex items-center">
                                <img
                                    alt="clients"
                                    src="{{asset('landing/karim.png')}}"
                                    class="object-cover w-16 h-16 rounded-full"
                                />
                                <div class="ml-4 text-sm font-bold">
                                    <p class="">Karim Mia</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                Insurecow’s services are too good. They have a wide range of
                                collections, So that it was very easy to find my desired
                                house very quickly with reasonable price. I recommend them
                                strongly.

                                <br />
                            </p>
                            <div class="flex w-full justify-end">
                                <div
                                    id="tab"
                                    class="w-10 h-10 focus:text-teal-500 hover:text-teal-500 flex py-1 justify-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        class="block w-5 h-5 text-indigo-700 mb-4"
                                        viewBox="0 0 975.036 975.036"
                                        style="color: #226034"
                                    >
                                        <path
                                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote
                            class="p-8 bg-gray-100"
                            style="
                    background: linear-gradient(
                      180deg,
                      #c5ead5 0%,
                      #dbedc9 100%
                    );
                    border-radius: 10px;
                  "
                        >
                            <div class="flex items-center">
                                <img
                                    alt="clients"
                                    src="{{asset('landing/karim.png')}}"
                                    class="object-cover w-16 h-16 rounded-full"
                                />
                                <div class="ml-4 text-sm font-bold">
                                    <p class="">Rahim Mia</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                Insurecow’s services are too good. They have a wide range of
                                collections, So that it was very easy to find my desired
                                house very quickly with reasonable price. I recommend them
                                strongly.

                                <br />
                            </p>

                            <div class="flex w-full justify-end">
                                <div
                                    id="tab"
                                    class="w-10 h-10 focus:text-teal-500 hover:text-teal-500 flex py-1 justify-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        class="block w-5 h-5 text-indigo-700 mb-4"
                                        viewBox="0 0 975.036 975.036"
                                        style="color: #226034"
                                    >
                                        <path
                                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote
                            class="p-8 bg-gray-100"
                            style="
                    background: linear-gradient(
                      180deg,
                      #c5ead5 0%,
                      #dbedc9 100%
                    );
                    border-radius: 10px;
                  "
                        >
                            <div class="flex items-center">
                                <img
                                    alt="clients"
                                    src="{{asset('landing/karim.png')}}"
                                    class="object-cover w-16 h-16 rounded-full"
                                />
                                <div class="ml-4 text-sm font-bold">
                                    <p class="">Mukim Brothers</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                Insurecow’s services are too good. They have a wide range of
                                collections, So that it was very easy to find my desired
                                house very quickly with reasonable price. I recommend them
                                strongly.

                                <br />
                            </p>
                            <div class="flex w-full justify-end">
                                <div
                                    id="tab"
                                    class="w-10 h-10 focus:text-teal-500 hover:text-teal-500 flex py-1 justify-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        class="block w-5 h-5 text-indigo-700 mb-4"
                                        viewBox="0 0 975.036 975.036"
                                        style="color: #226034"
                                    >
                                        <path
                                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="mt-12 swiper-pagination !bottom-0 !relative"></div>
            </div>
        </div>
    </section>
</div>
<!-- --------------------------------------------- sixth container --------------------------------------------- -->

<section class="third-section">
    <div>
        <!-- ------------------- latest update and news ----------------------- -->

        <div>
            <h4 class="third-section_title" style="font-size: 30px;">Latest Update & News</h4>
            <br />
            <p class="third-section_p">
                Here is The latest news and updates about InsureCow
            </p>
        </div>

        <div class="left-side">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-4">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/news-1.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">
                                InsureCow Became The Champion of Huawei ICT Incubator 2022
                            </p>

                            <br />
                            <div class="d-flex justify-content-center">
                                <a href="https://www.thedailystar.net/tech-startup/news/huawei-ict-incubator-2022-announces-top-6-startups-bangladesh-3147281" class="btn btn-success" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                <div class="col-md-4">
                    <div class="team-members-box-padding">
                        <div class="services-img">
                            <img src="{{asset('landing/news-2.png')}}" alt="" class="img-fluid" />
                        </div>

                        <div>
                            <p class="third-section_item_title">
                                Best 'InsurCow' in Startup Competition
                            </p>
                            <br />
                            <div class="d-flex justify-content-center">
                                <a href="https://www.prothomalo.com/technology/19halxulgm" class="btn btn-success" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="col"></div>
            </div>

            <br />
        </div>

        <!-- --------------------- latest update and news --------------------- -->
    </div>
</section>

<!-- --------------------------------------------- sixth container --------------------------------------------- -->

<!-- --------------------------------------------- seventh container --------------------------------------------- -->

<!-- --------------------- our partners --------------------- -->

<section
    class="third-section"
    style="background: linear-gradient(180deg, #c5ead5 0%, #f6ffed 100%)"
>
    <div>
        <h4 class="third-section_title" style="font-size: 30px;">Our Partners</h4>
        <br />
        <div class="partner-services">
            <div class="services-row">
                <div class="partners-img">
                    <img src="{{asset('landing/aws.png')}}" alt="" class="img-fluid partners" />
                </div>

                <div class="partners-img">
                    <img src="{{asset('landing/bnic.png')}}" alt="" class="img-fluid partners" />
                </div>

                <div class="partners-img">
                    <img src="{{asset('landing/united.png')}}" alt="" class="img-fluid partners" />
                </div>

                <div class="partners-img">
                    <img src="{{asset('landing/bni.png')}}" alt="" class="img-fluid partners" />
                </div>

                <div class="partners-img">
                    <img
                        src="{{asset('landing/national.png')}}"
                        alt=""
                        class="img-fluid partners"
                    />
                </div>

                <div class="partners-img">
                    <img src="{{asset('landing/city.png')}}" alt="" class="img-fluid partners" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- --------------------- our partners --------------------- -->

<!-- Contact -->
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

<!-- --------------------------------------------- seventh container --------------------------------------------- -->

<!-- footer -->
<section>
    <footer
        class="text-center lg:text-left bg-gray-100 text-gray-600"
        style="background: linear-gradient(180deg, #c5ead5 0%, #dbedc9 100%)"
    >
        <br /><br />
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="footer-img-mobile-state">
                    <img src="images/logo.png" alt="" />
                </div>
                <div class="">
                    <h6
                        class="uppercase font-semibold mb-4 flex justify-center md:justify-start"
                    >
                        Explore Us
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Home</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Our Services</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">About Us</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Blog</a>
                    </p>
                </div>
                <div class="">
                    <h6
                        class="uppercase font-semibold mb-4 flex justify-center md:justify-start"
                    >
                        Locations
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Bangladesh</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">India</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Australia</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <a href="#!" class="text-gray-600">Newzealand</a>
                    </p>
                </div>
                <div class="">
                    <h6
                        class="uppercase font-semibold mb-4 flex justify-center md:justify-start"
                    >
                        Contact Us
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="home"
                            class="w-4 mr-4"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"
                        >
                            <path
                                fill="currentColor"
                                d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"
                            ></path>
                        </svg>
                        Suite 201, Navana DH Tower

                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="envelope"
                            class="w-4 mr-4"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                fill="currentColor"
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                            ></path>
                        </svg>
                        inquiry@insurecow.com
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="phone"
                            class="w-4 mr-4"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"
                            ></path>
                        </svg>
                        +880 1755680807
                    </p>
                </div>
            </div>
        </div>
        <div
            class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300"
        >
            <div class="mr-12 hidden lg:block">
                <span>© 2023 Copyright: InsureCow</span>
            </div>
            <div class="flex justify-center">
                <a href="#!" class="mr-6 text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="facebook-f"
                        class="w-2.5"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                    >
                        <path
                            fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                        ></path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="twitter"
                        class="w-4"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <path
                            fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                        ></path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="google"
                        class="w-3.5"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 488 512"
                    >
                        <path
                            fill="currentColor"
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                        ></path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="instagram"
                        class="w-3.5"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                    >
                        <path
                            fill="currentColor"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                        ></path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="linkedin-in"
                        class="w-3.5"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                    >
                        <path
                            fill="currentColor"
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                        ></path>
                    </svg>
                </a>
                <a href="#!" class="text-gray-600">
                    <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fab"
                        data-icon="github"
                        class="w-4"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 496 512"
                    >
                        <path
                            fill="currentColor"
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</section>
</body>

<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script>
    function Menu(e) {
        let list = document.querySelector("ul");
        e.name === "menu"
            ? ((e.name = "close"),
                list.classList.add("top-[80px]"),
                list.classList.add("opacity-100"),
                list.classList.add("background-indigo"))
            : ((e.name = "menu"),
                list.classList.remove("top-[80px]"),
                list.classList.remove("opacity-100"));
    }
</script>
<script src="{{asset('js/Slider.js')}}"></script>
</html>
