@extends('user.layouts.master-page')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Car Rental Booking</div>

                <div class="card-body">
                    <form method="POST" action="/booking" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" required autofocus>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">PassWord</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control" name="phone_number" required>
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
                        <div class="form-group">
                            <label for="dln_picture">Driving License Picture:</label>
                            <input type="file" class="form-control-file @error('dln_picture') is-invalid @enderror" id="dln_picture"
                                   name="dln_picture">
                            @error('dln_picture')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                                <select id="car" class="form-control" name="car" required>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id}}">{{ $car->marque->name." ".$car->model->name }}</option>
                                    @endforeach
                                </select>
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

