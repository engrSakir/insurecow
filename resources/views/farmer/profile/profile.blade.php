@extends('layouts.farmer')
@push('css')
    <link rel="stylesheet" href="{{asset('css/form_page.css')}}" />
@endpush

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card mt-4 mb-5">
        <form class="{{ route('farmerprofiles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-block p-2 card-block-top mb-4">
                <h4 class="ms-4">Farmer Profile</h4>
            </div>
            <div class="card-block p-2 card-block-down">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row px-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputFirstName">First name :</label>
                            <input type="text" id="inputFirstName" class="form-control input-style" name="first_name" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Last name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="last_name" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Email :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Phone :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"/>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="address"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">City :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="city"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">District :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="district"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Zip Code :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="zip_code"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Country :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="country"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Image :</label>
                            <input type="file" id="inputLastName" class="form-control input-style" name="image"/>
                        </div>
                    </div><hr>
                    <div class="col-md-6 mb-4">

                        <button type="submit" class="btn text-white" style="background: #23BB86">Save</button>

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
