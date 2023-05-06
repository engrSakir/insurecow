  <!--==================== NAVBAR ====================-->

  <header>
      <div>
          <nav class="navbar navbar-expand-lg navbar-light pb-0" style="background: #D7ECCB;">
              <div class="container-fluid">

                  <!--Navbar Logo-->
                  <a href="{{ route('farmer.index') }}" class="navbar-brand">
                      <img src="{{ asset('images/logo.png') }}" alt="Logo">
                  </a>

                  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div id="navbarCollapse" class="collapse navbar-collapse">

                      <!--Home-->
                      <ul class="nav navbar-nav ms-auto">
                          <li class="nav-item navbar-brand">
                              <a href="{{ route('farmer.index') }}"
                                  class="nav-link">Home</a>
                          </li>

                          <!--Profile-->
                          <li class="nav-item dropdown navbar-brand">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  Profile Info
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  @if (auth()->user()->farmer_profile()->count() == 0)
                                      <li><a class="dropdown-item"
                                              href="{{ route('farmerprofiles.index') }}">Profile</a>
                                      </li>
                                  @else
                                      <!-- Nav Item - Profile Edit -->
                                      <li>
                                          <a class="dropdown-item"
                                              href="{{ route('farmerprofiles.edit', auth()->user()->id) }}">
                                              <span>Edit Profile</span></a>
                                      </li>
                                  @endif
                                  {{--                                <li><a class="dropdown-item" href="{{ route('farmer.choose.plan') }}">Choose Plans </a></li> --}}
                                  <li><a class="dropdown-item" href="{{ route('farmer.change.password') }}">
                                          Change Password</a></li>
                                  <!-- <li><a class="dropdown-item" href="#">Farm Address</a></li> -->

                                  {{--                                <li><a class="dropdown-item" href="{{ route('farmer.expense') }}">Expenses</a></li> --}}
                                  {{--                                <li><a class="dropdown-item" href="{{ route('expense.history') }}">Expense History</a></li> --}}
                              </ul>
                          </li>

                          <!--Reports-->
                          {{--                        <li class="nav-item dropdown navbar-brand"> --}}
                          {{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                          {{--                                Reports --}}
                          {{--                            </a> --}}
                          {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> --}}
                          {{--                                <li><a class="dropdown-item" href="{{ route('farmer.medical.report') }}">Upload Medical Report</a></li> --}}
                          {{--                                <li><a class="dropdown-item" href="{{ route('write.medical.report') }}">Write Medical Report</a></li> --}}
                          {{--                                <li><a class="dropdown-item" href="{{ route('medical.history') }}">Medical History</a></li> --}}
                          {{--                            </ul> --}}
                          {{--                        </li> --}}

                          <li class="nav-item dropdown navbar-brand">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  Cattles
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item"
                                          href="{{ route('reg_one.index') }}"> Reegister Cattles</a>
                                  </li>
                                  <li><a class="dropdown-item"
                                          href="{{ route('farmer.registered.cattle') }}">Registered Cattles</a>
                                  </li>
                              </ul>
                          </li>

                          <!--Notification-->
                          <!-- <li class="nav-item navbar-brand">
                            <a href="{{ route('farmer.notification') }}" class="nav-link">Notification</a>
                        </li> -->
                          <li class="nav-item navbar-brand">
                              <!-- <button type="submit" class="signout-button">SignOut</button> -->

                              <a href="{{ route('fdashboard.index') }}" class="btn signout-button"
                                  style="background: #086343; color: #ffffff !important">Manage Farm</a>

                          </li>
                          <!--Sign out-->
                          <!-- <li class="nav-item navbar-brand"> -->
                          <!-- <button type="submit" class="signout-button">SignOut</button> -->
                          <!-- <a href="{{ route('log_out') }}" class="btn signout-button" style="background: #086343; color: #ffffff !important">SignOut</a>
                        </li> -->


                          <li class="nav-item dropdown navbar-brand">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  @php
                                      $profile = App\FarmerProfile::where('user_id', Auth::user()->id)->first();
                                  @endphp
                                  @if ($profile)
                                      <img src="{{ asset('/storage/' . $profile->image) }}" class="img-fluid"
                                          width="20px">
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
                      <ul class="navbar-nav d-flex flex-row">
                          {{--                        <li class="nav-item navbar-brand"> --}}
                          {{--                            <a href="#" class="nav-link">English</a> --}}
                          {{--                        </li> --}}

                          {{--                        <div class="vr vr-style"></div> --}}

                          {{--                        <li class="nav-item navbar-brand ms-2"> --}}
                          {{--                            <a href="#" class="nav-link">বাংলা </a> --}}
                          {{--                        </li> --}}

                          <select class="form-select changeLang"
                              style=" background-color: #0f6848; color:white;border:none">
                              <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                              </option>
                              <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>বাংলা
                              </option>

                          </select>
                      </ul>
                  </div>
              </div>
          </nav>
          <hr class="hr-style">
      </div>

  </header>
