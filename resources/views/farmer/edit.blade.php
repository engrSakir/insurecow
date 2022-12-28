@extends('layouts.master')

@section('content')
<section>
    <div class="card card-style mt-4 mb-5">
        <form action="{{ route('farmerprofiles.update', $profile->id) }}" method="POST">      
        @method('put')   
        {{ csrf_field() }}
            <div class="card-block p-2 card-block-top mb-4">
                <h4 class="ms-4">Update Farmer Profile</h4>
            </div>
            <div class="card-block p-2 card-block-down">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row px-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputFirstName">First name :</label>
                            <input type="text" id="inputFirstName" class="form-control input-style" name="first_name" value="{{ $profile->first_name }}" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Last name :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="last_name"  value="{{ $profile->last_name }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Email :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="email" value="{{ $profile->email }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Phone :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="phone" value="{{ $profile->phone }}" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Address :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="address"  value="{{ $profile->address }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">City :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="city"  value="{{ $profile->city }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">District :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="district"  value="{{ $profile->district }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Zip Code :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="zip_code"  value="{{ $profile->zip_code }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="inputLastName">Country :</label>
                            <input type="text" id="inputLastName" class="form-control input-style" name="country"  value="{{ $profile->country }}" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                   
                        <button type="submit" class="register-button">Update</button>
                    
                        <button type="submit" class="register-button">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
