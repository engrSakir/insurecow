@extends('layouts.fieldagent')
@push('css')
    <link rel="stylesheet" href="{{asset('css/login_page.css')}}" />
@endpush
<style>
    body,aside,header,select,option,div,input,label,footer,span,p,ul,li,a,input,table,tr,td,th,i {
        cursor: url('{{ asset('images/favicon.png') }}'), auto;
    }
</style>

@section('content')
    <section>
        <!--Sign In Form-->
        <div class="row g-0 mt-5 mb-5" style="margin: 0; padding: 0">

            <div class="col-lg-6 ">
                <div class="p-5 h-100 shadow-none">

                    <p class="login-text text-center" style="font-family: 'Roboto Slab';font-weight: 700;font-size: 26px;line-height: 34px; color: #082E13;">Sign Up</p>
                    <p class="p-welcome-text mb-4 text-center para" style="">Welcome To Insure Cow!</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{route('fieldagent.storeFarmer')}}">
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
                        <div class="mb-4">
                            <label for="email" class="form-label">Nid</label>
                            <input
                                id="email" name="nid" value="{{ old('nid') }}" required autocomplete="nid" autofocus
                                type="number"

                                class="form-control fontAwesome input-form  @error('nid') is-invalid @enderror"

                                placeholder="Enter NID"
                                required
                            />
                            @error('nid')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Date Of Birth</label>
                            <input
                                id="email" name="dob" value="{{ old('dob') }}" required autocomplete="email" autofocus
                                type="date"

                                class="form-control fontAwesome input-form  @error('dob') is-invalid @enderror"

                                placeholder="Enter Dob"
                                required
                            />
                            @error('dob')
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
{{--                            <i class="fas fa-eye-slash fa-eye" id="eye" ></i>--}}
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
                                <div class="d-flex justify-content-between mb-5" >
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

                    </form>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-style h-100">

                    <img  src="{{asset('./images/12.png')}}" class="img-fluid" alt="Cow" />

                </div>
            </div>


        </div>
    </section>
    <hr class="hr-style" />


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

@endsection
