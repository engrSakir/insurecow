  <!--==================== NAVBAR ====================-->

  <header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">

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
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item navbar-brand">
                            <a href="{{route('farmer.index')}}" class="nav-link">Home</a>
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

                                  <li><a class="dropdown-item" href="{{ route('farmer.change.password') }}">Change Password</a></li>

                            </ul>
                          </li>

                        <!--Reports-->
                        <li class="nav-item dropdown navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">





                                <li><a class="dropdown-item" href="{{ route('farmer.choose.plan') }}">Choose Plans </a></li>



                                <li><a class="dropdown-item" href="{{ route('farmer.registered.cattle') }}">Registered Cattle</a></li>
                                <li><a class="dropdown-item" href="{{ route('farmer.medical.report') }}">Medical Report</a></li>
                                <li><a class="dropdown-item" href="{{ route('write.medical.report') }}">Write Medical Report</a></li>
                                <li><a class="dropdown-item" href="{{ route('farmer.expense') }}">Expenses</a></li>




                            </ul>
                        </li>

                        <!--Notification-->
                        <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.notification') }}" class="nav-link">Notification</a>
                        </li>

                        <!--Sign out-->
                        <li class="nav-item navbar-brand">
                            <!-- <button type="submit" class="signout-button">SignOut</button> -->

                            <a href="{{ route('log_out') }}" class="btn signout-button">SignOut</a>

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

