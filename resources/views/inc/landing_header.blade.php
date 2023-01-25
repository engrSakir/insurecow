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
                        <a class="nav-link nav-font" href="{{url('/')}}"
                        >Home <span class="sr-only">(current)</span></a
                        >
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
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
                                <a class="dropdown-item" href="#">Something else here</a>

                        </div>
                    </li>
                    <li class="nav-item nav-font">
                        <a class="nav-link" href="#">About Us</a>
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
