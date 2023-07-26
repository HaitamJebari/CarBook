@extends('layouts.master_page')
@section('title','Add customers')
@section('content')
<h1>Add Customer</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="/admin/managecustomer" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
               value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
               value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
               name="password">
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>

    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age"
               value="{{ old('age') }}">
        @error('age')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
               name="phone_number" value="{{ old('phone_number') }}">
        @error('phone_number')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="driving_license_number">Driving License Number:</label>
        <input type="text" class="form-control @error('driving_license_number') is-invalid @enderror"
               id="driving_license_number" name="driving_license_number"
               value="{{ old('driving_license_number') }}">
        @error('driving_license_number')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
               value="{{ old('address') }}">
        @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
               value="{{ old('city') }}">
        @error('city')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="state">State:</label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state"
               value="{{ old('state') }}">
        @error('state')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="zip_code">Zip Code:</label>
        <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code"
               name="zip_code" value="{{ old('zip_code') }}">
        @error('zip_code')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="dln_picture">Driving License Picture:</label>
        <input type="file" class="form-control-file @error('dln_picture') is-invalid @enderror" id="dln_picture"
               name="dln_picture">
        @error('dln_picture')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
