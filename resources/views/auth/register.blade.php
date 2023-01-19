
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==================== BOOTSTRAP ====================-->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />

    <!--==================== FONT AWESOME ====================-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/login_page.css')}}" />

    <style>
        body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
            cursor: url('{{ asset('images/favicon.png') }}'), auto;
        }
    </style>

    <title>InsureCow</title>
</head>

<body class="container">
<!--==================== NAVBAR ====================-->
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">
                <!--Navbar Logo-->
                <a href="/" class="navbar-brand">
                    <img src="./images/logo.png" alt="Logo" />
                </a>

                <button
                    type="button"
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <!--About Us-->
                    <ul class="nav navbar-nav ms-auto">
                        <!-- <li class="nav-item navbar-brand">
                          <a href="#" class="nav-link">About Us</a>
                        </li> -->

                        <!--Plans-->
                        <li class="nav-item navbar-brand">
                            <a href="https://insurecow.com/#we-are" class="nav-link">Who we are</a>
                        </li>

                        <!--Features-->
                        <li class="nav-item navbar-brand">
                            <a href="#" class="nav-link">Products & services</a>
                        </li>

                        <!--Our Goals-->
                        <li class="nav-item navbar-brand">
                            <a href="https://insurecow.com/#services" class="nav-link">Our team</a>
                        </li>

                        <!--Contact Us-->
                        <li class="nav-item navbar-brand">
                            <a href="https://insurecow.com/#team" class="nav-link">Achievements</a>
                        </li>
                    </ul>

                    <!--Language-->
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item navbar-brand">
                            <a href="https://insurecow.com/#achievements" class="nav-link">English</a>
                        </li>

                        <div class="vr vr-style"></div>

                        <li class="nav-item navbar-brand ms-2">
                            <a href="#" class="nav-link">বাংলা </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr class="hr-style" />
    </div>
</header>

<!--==================== LOG IN ====================-->

<section>
    <!--Sign In Form-->
    <div class="row g-0 mt-5 mb-5">

        <div class="col-lg-6 ">
            <div class="card login-card p-5 h-100 shadow-none">
                <div class="card-body">
                    <p class="login-text">Sign Up</p>
                    <p class="p-welcome-text mb-4">Welcome To Insure Cow!</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Name-->
                        <div class="mb-4">
                            <label for="email" class="form-label">Name </label>
                            <input
                                id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                type="text"

                                class="form-control fontAwesome input-form  @error('name') is-invalid @enderror"

                                placeholder="Enter Name"
                                required="required"
                            />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Phone-->
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone </label>
                            <input
                                id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                type="text"

                                class="form-control fontAwesome input-form  @error('phone') is-invalid @enderror"

                                placeholder="Enter Phone"
                                required="required"
                            />
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Email-->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input
                                id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                type="text"

                                class="form-control fontAwesome input-form  @error('email') is-invalid @enderror"

                                placeholder="Enter Email"
                                required
                            />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        @if ($error = $errors->first('password'))
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endif
                        <!--Password-->
                        <div class="mb-4 password-container" style="position: relative">
                            <label for="password" class="form-label">Password: </label>
                            <input
                                id="password" name="password" required autocomplete="current-password"
                                type="password"

                                class="form-control fontAwesome input-form @error('password') is-invalid @enderror"

                                id="password"
                                placeholder="Enter Password"
                                required
                            />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-eye-slash fa-eye" id="eye" ></i>
                            {{-- <i class="fa-solid fa-eye" id="eye"></i> --}}
                        </div>

                        <!--Confirm Password-->
                        <div class="mb-4 password-container" style="position: relative">
                            <label for="password" class="form-label">Confirm Password: </label>
                            <input
                                id="password" name="password_confirmation"  autocomplete="current-password"
                                type="password"

                                class="form-control fontAwesome input-form @error('password_confirmation') is-invalid @enderror"

                                id="password1"
                                placeholder="Enter Confirm Password"
                                required
                            />
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-eye-slash fa-eye" id="eye1" ></i>
                            {{-- <i class="fa-solid fa-eye" id="eye"></i> --}}
                        </div>


                        <!--Terms & Conditions-->
                        <div class="col-12 mb-4">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                    id="invalidCheck2"

                                />
                                <div class="d-flex justify-content-between mb-5">
                                    <label class="form-footer-text" id="invalidCheck2">I agree to platform terms of service and privacy policy </label>
                                    @php
                                        $token= uniqid();
                                    @endphp
{{--                                    <a href="{{ route('password.reset', $token) }}" class="form-footer-text"><label>Forgot password?</label></a>--}}

                                </div>

                            </div>
                        </div>

                        <!--Log In Button-->
                        <button type="submit" class=" mb-4 form-control" style="background-color: #1D5C2E; color: white">Sign Up</button>
                        <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-style h-100">
                <div class="card-body">
                    <img  src="./images/12.png" class="img-fluid" alt="Cow" />
                </div>
            </div>
        </div>


    </div>
</section>

<!--==================== FOOTER ====================-->
<hr class="hr-style" />
<section>
    <footer>
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-4">
                    <div>
                        <img src="./images/logo.png" />
                    </div>
                    <p>
                        InsureCow is a cattle wellbeing monitoring and insurance
                        platform that is playing a significant role in protecting and
                        ensuring the asset value of large cattle for livestock farmers.
                    </p>
                </div>

                <!--Grid column-->
                <div class="col-lg-2 col-md-12 mt-lg-4 mb-4 mb-md-4 offset-lg-1">
                    <div>
                        <h5 class="mb-4">Language</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="language-footer">English</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="language-footer">Bangla</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mt-lg-4 mb-4 mb-md-0 offset-lg-1">
                    <div>
                        <h5 class="mb-4">Contact Us</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Phone : +880 1672 838306</li>
                            <li class="mb-2">E-mail : inquiry@insurecow.com</li>
                            <li class="mb-2">
                                Suite 201, Navana DH Tower, 6 Panthapath Lane
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <p>Insure Cow © 2021 All Right Reserved</p>
        </div>
    </footer>
</section>

<!--==================== JavaScript Bundle with Popper ====================-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
<script>
    const passwordInput = document.querySelector("#password")
    const eye = document.querySelector("#eye")
    eye.addEventListener("click", function(){
        this.classList.toggle("fa-eye-slash")
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
        passwordInput.setAttribute("type", type)
    })
</script>
<script>
    const passwordInput1 = document.querySelector("#password1")
    const eye1 = document.querySelector("#eye1")
    eye1.addEventListener("click", function(){
        this.classList.toggle("fa-eye-slash")
        const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password"
        passwordInput1.setAttribute("type", type)
    })
</script>
</body>
</html>
