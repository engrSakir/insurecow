@extends('layouts.fieldagent')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-4 mb-5">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="" action="{{ route('agentProfile.update',$agent->id) }}" method="POST" enctype="multipart/form-data"
                              style="background: #D7ECCB;">
                            @csrf
                            @method('put')
                            <div class="card-block p-2 card-block-top mb-4 text-white" style="background-color: #0f6848">
                                <h4 class="ms-4">Agent Profile</h4>
                            </div>
                            <div class="card-block p-2 card-block-down" style="background: #D7ECCB;">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row px-4">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputFirstName">Full Name :</label>
                                            <input type="text" id="inputFirstName" class="form-control input-style"
                                                   name="name" placeholder="Full Name"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->name}}"/>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Email :</label>
                                            <input type="email" id="inputLastName" class="form-control input-style"
                                                   name="email"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Phone :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="phone"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                                        </div>
                                    </div>




                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Present Address :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="present_address" placeholder="Present Address"
                                                   value="{{$agent->present_address }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Permanent Address :</label>
                                            <input type="text" id="inputLastName" class="form-control input-style"
                                                   name="permanent_address" placeholder="Permanent Address"
                                                   value="{{$agent->permanent_address}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Date Of Birth :</label>
                                            <input type="date" id="datepickerfarmer" class="form-control input-style"
                                                   name="dob" placeholder="Date Of Birth" value="{{$agent->dob}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">NID/Passport/Birth
                                                Registration No. :</label>
                                            <input type="number" min="0" id="inputLastName"
                                                   class="form-control input-style" name="nid"
                                                   placeholder="NID/Passport/Birth Registration No."
                                                   value="{{$agent->nid}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <img src="{{ asset('storage/' . $agent->image) }}" alt="" style="width: 50px; height: 50px">

                                        <div class="form-outline">
                                            <label class="form-label" for="inputLastName">Image :</label>
                                            <input type="file" id="inputLastName" class="form-control input-style"
                                                   name="image"/>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="col-md-6 mb-4">

                                        <button type="submit" class="btn text-white" style="background: #086343;">Save
                                        </button>

                                        <button type="submit" class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
