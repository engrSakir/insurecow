  <!--==================== NAVBAR ====================-->

    <div>
        <nav class="navbar navbar-expand-lg navbar-light pb-0" style="background: linear-gradient(180deg, #226034 -72.33%, rgba(34, 96, 52, 0) 109.17%);">
            <div class="container">

                <!--Navbar Logo-->
                <a href="{{route('farmer.index')}}" class="navbar-brand">
                    <img src="{{asset('images/logo.png')}}" alt="Logo">
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">

                    <!--Home-->
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item navbar-brand">
                            <a href="{{route('farmer.index')}}" class="nav-link">Home</a>
                        </li>

                        <!--Reports-->
                        <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cattle Insurance Service</a></li>
                                <li><a class="dropdown-item" href="#">Farmer Expense Calculator</a></li>
                                <li><a class="dropdown-item" href="#">Cattle Medical Report Generate</a></li>
                            </ul>
                        </li>

                                                <!--Profile-->
                                                <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Profile Info
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->farmer_profile()->count() == 0)
                                    <li><a class="dropdown-item" href="{{route('farmerprofiles.index')}}">Profile</a></li>   
                                @else
                            <!-- Nav Item - Profile Edit -->
                            <li>
                                <a class="dropdown-item" href="{{ route('farmerprofiles.edit', auth()->user()->id) }}">
                                    <span>Edit Profile</span></a>
                            </li>
                            @endif
                                <li><a class="dropdown-item" href="{{ route('farmer.choose.plan') }}">Choose Plans </a></li>    
                                <li><a class="dropdown-item" href="{{ route('farmer.change.password') }}">Change Password</a></li>
                                <li><a class="dropdown-item" href="{{ route('farmer.expense') }}">Expenses</a></li>
                                <li><a class="dropdown-item" href="{{ route('expense.history') }}">Expense History</a></li>
                            </ul>
                          </li>

                        <!--Reports-->
                        <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('farmer.medical.report') }}">Upload Medical Report</a></li>
                                <li><a class="dropdown-item" href="{{ route('write.medical.report') }}">Write Medical Report</a></li>
                                <li><a class="dropdown-item" href="{{ route('medical.history') }}">Medical History</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cattles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('reg_one.index') }}">Register a Cattle</a></li>
                                <li><a class="dropdown-item" href="{{ route('farmer.registered.cattle') }}">Registered Cattles</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                  $profile = App\FarmerProfile::where('user_id', Auth::user()->id)->first();
                                @endphp
                              @if($profile)
                                <img src="{{ asset('/storage/'.$profile->image) }}" class="img-fluid" width="20px">
                              @else
                                <img src="{{ asset('/images/profile.png') }}" class="img-fluid" width="20px">
                              @endif
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('log_out') }}">Sign Out</a></li>   
                            </ul>
                          </li>

                    </ul>

                    <!--Language-->
                    <ul class="navbar-nav d-flex flex-row ms-end">
                        @if(auth()->user())
                            <li class="nav-item navbar-brand">
                                <a href="{{ route('log_out') }}" class="btn" style="background: #d9d9d9">SIGN OUT</a>
                            </li>
                        @else
                            <li class="nav-item navbar-brand">
                                <a href="#" class="btn" style="background: #d9d9d9">SIGN IN</a>
                            </li>

                            <div class="vr vr-style"></div>

                            <li class="nav-item navbar-brand ms-2">
                                <a href="#" class="btn" style="background: #226034; color: #fff !important;">SIGN UP</a>
                            </li>
                        @endif
                    </ul>

                    <!--Language-->
                    <!-- <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">English</a>
                        </li>

                        <div class="vr vr-style"></div>

                        <li class="nav-item navbar-brand ms-2">
                            <a href="#" class="nav-link">বাংলা </a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <hr class="hr-style">
    </div>

