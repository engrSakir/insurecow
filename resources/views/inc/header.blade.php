<!--==================== NAVBAR ====================-->
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">

                <!--Navbar Logo-->
                <a href="#" class="navbar-brand">
                    <img src="{{asset('images/logo.png')}}" alt="Logo">
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">

                    <!--About Us-->
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">About Us</a>
                        </li>

                        <!--Plans-->
                        <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.choose.plan') }}" class="nav-link">Plans</a>
                        </li>

                        <!--Plans-->
                        <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.change.password') }}" class="nav-link">Change Password</a>
                        </li>

                        <!--Plans-->
                        <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.notification') }}" class="nav-link">Notifications</a>
                        </li>

                        <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.registered.cattle') }}" class="nav-link">Registered Cattles</a>
                        </li>

                        <!--Features-->
                        @if (auth()->user()->farmer_profile()->count() == 0)
                        <!-- Nav Item - Profile -->
                            <li class="nav-item navbar-brand">
                                <a class="nav-link" href="{{ route('farmerprofiles.index') }}">
                                    <span>Profile</span></a>
                            </li>
                        @else
                            <!-- Nav Item - Profile Edit -->
                            <li class="nav-item navbar-brand">
                                <a class="nav-link" href="{{ route('farmerprofiles.edit', auth()->user()->id) }}">
                                    <span>Edit Profile</span></a>
                            </li>
                        @endif

                        <!--Our Goals-->
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">Our Goals</a>
                        </li>

                        <!--Contact Us-->
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">Contact Us </a>
                        </li>
                    </ul>

                    <!--Language-->
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">English</a>
                        </li>

                        <div class="vr vr-style"></div>

                        <li class="nav-item navbar-brand ms-2">
                            <a href="#" class="nav-link">বাংলা </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr class="hr-style">
    </div>
</header>