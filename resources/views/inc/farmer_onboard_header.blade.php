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

                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">Blog</a>
                        </li>

                    </ul>

                    <!--Language-->
                    <ul class="navbar-nav d-flex flex-row ms-end">
                        <li class="nav-item navbar-brand">
                            <a href="#" class="btn" style="background: #d9d9d9">SIGN IN</a>
                        </li>

                        <div class="vr vr-style"></div>

                        <li class="nav-item navbar-brand ms-2">
                            <a href="#" class="btn" style="background: #226034; color: #fff !important;">SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr class="hr-style">
    </div>

