@extends('user.layouts.master-page')

@section('content')

<div class="container">
    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5"><img class="hero-wrap hero-wrap-2 js-fullheight" src={{ asset("/Layouts/images/bg_3.jpg") }} alt=""> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Car Rental Booking</div>

                <div class="card-body">
                    <form method="POST" action="/booking" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip Code</label>

                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control" name="zip_code" required>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="driving_license_number" class="col-md-4 col-form-label text-md-right">Driving License Number</label>

                            <div class="col-md-6">
                                <input id="driving_license_number" type="text" class="form-control" name="driving_license_number" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="rental_start_date" class="col-md-4 col-form-label text-md-right">Rental Start Date</label>

                            <div class="col-md-6">
                                <input id="rental_start_date" type="date" class="form-control" name="rental_start_date" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rental_end_date" class="col-md-4 col-form-label text-md-right">Rental End Date</label>

                            <div class="col-md-6">
                                <input id="rental_end_date" type="date" class="form-control" name="rental_end_date" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="car" class="col-md-4 col-form-label text-md-right">Car</label>
                            <div class="col-md-6">

                                    <input id="car" type="text" class="form-control" name="car" readonly value="{{ $car["id"] }}" hidden>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                          <img src="{{ asset('images/cars/'.$car['picture']) }}" alt="" class="img-fluid rounded">
                                        </div>
                                      </div>
                                    {{-- <img src="{{ asset('images/cars/'.$car['picture']) }}" alt="picture "> --}}
                            </div>
                            </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

