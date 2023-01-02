
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

    <title>InsureCow</title>
  </head>

  <body class="container">
    <!--==================== NAVBAR ====================-->
    <header>
      <div>
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
          <div class="container-fluid">
            <!--Navbar Logo-->
            <a href="../../index.html" class="navbar-brand">
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
                <li class="nav-item navbar-brand">
                  <a href="#" class="nav-link">About Us</a>
                </li>

                <!--Plans-->
                <li class="nav-item navbar-brand">
                  <a href="#" class="nav-link">Plans</a>
                </li>

                <!--Features-->
                <li class="nav-item navbar-brand">
                  <a href="#" class="nav-link">Features </a>
                </li>

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
        <hr class="hr-style" />
      </div>
    </header>

    <!--==================== LOG IN ====================-->

    <section>
       <!--Sign In Form-->
      <div class="row g-0 mt-5 mb-5">

       <div class="col-lg-6">
        <div class="card login-card p-5 h-100">
          <div class="card-body">
            <p class="login-text mb-4">Sign In</p>
            <p class="p-welcome-text mb-5">Welcome To Insure Cow!</p>

            <form method="POST" action="{{ route('login') }}">
            @csrf
              <!--User Name-->
              <div class="mb-4">
                <label for="email" class="form-label">Email / Phone: </label>
                <input
                id="email"   @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  type="text"
                  class="form-control fontAwesome input-form"
                  placeholder="Enter Email or Phone"
                  required="required"
                />
              </div>

              <!--User Password-->
              <div class="mb-4 password-container">
                <label for="password" class="form-label">Password: </label>
                <input
                  id="password"   @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                  type="password"
                  class="form-control fontAwesome input-form"
                  id="password"
                  placeholder="Enter Password"
                  required="required"
                />
                <i class="fa-solid fa-eye" id="eye"></i>


              </div>


              <!--Terms & Conditions-->
              <div class="col-12 mb-4">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="invalidCheck2"
                    required
                  />
                  <div class="d-flex justify-content-between mb-5">
                    <label class="form-footer-text">Keep me signed in</label>
                    <a href="../otp_page/otp_page.html" class="form-footer-text"
                      ><label>Forgot password?</label></a
                    >
                   
                  </div>
               
                </div>
              </div>

              <!--Log In Button-->
              <button type="submit" class="login-button mb-4">Log In</button>

              
            </form>
            <hr class="hr-style" />
          </div>
        </div>
      </div>
        <div class="col-lg-6">
          <div class="card card-style h-100">
            <div class="card-body">
              <img  src="./images/cow1.png" class="img-fluid" alt="Cow" />
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
  </body>
</html>
