@extends('layouts.master_page')
@section('title','Edit cars')
@section('content')
<h1>edit cars</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div>
    @include('User.Layouts.flash')
</div>
<form action="/admin/managecars/{{$car->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="matricule">Matricule:</label>
        <input type="text" class="form-control @error('matricule') is-invalid @enderror" id="matricule" name="matricule" value="{{ old('matricule', $car->matricule) }}">
        @error('matricule')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="marque">Marque:</label>
        <select class="form-control @error('marque') is-invalid @enderror" id="marque" name="marque">
            <option value="" selected>Select Marque</option>
            @foreach($marques as $marque)
                <option value="{{ $marque->id }}" {{ old('marque', $car->marque_id) == $marque->id ? 'selected' : '' }}>
                    {{ $marque->name }}</option>
            @endforeach
        </select>
        @error('marque')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="model">Model:</label>
        <select class="form-control @error('model') is-invalid @enderror" id="model" name="model">
            <option value="">Select Model</option>
            @foreach($models as $model)
                <option value="{{ $model->id }}" data-marque="{{ $model->marque_id }}"
                        {{ old('model', $car->model_id) == $model->id ? 'selected' : '' }}>
                    {{ $model->name }}</option>
            @endforeach
        </select>
        @error('model')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category', $car->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $car->year) }}">
        @error('year')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="rental_price">Rental Price:</label>
        <input type="text" class="form-control @error('rental_price') is-invalid @enderror" id="rental_price" name="rental_price" value="{{ old('rental_price', $car->price_per_day) }}">
        @error('rental_price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture:</label>
        <div>
            <img src="{{ asset('car_images/'.$car->picture) }}" alt="Car Picture" class="img-fluid" width="200">
        </div>
    </div>
    <div class="form-group">
        <label for="picture">Picture:</label>
        <input type="file" class="form-control-file @error('picture') is-invalid @enderror" id="picture" name="picture">
        @error('picture')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="color">Color:</label>
        <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{ old('color', $car->color) }}">
        @error('color')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="availability">Availability:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="availability" id="availability-0" value="0" {{ old('availability', $car->availability) == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="availability-0">Unavailable</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="availability" id="availability-1" value="1" {{ old('availability', $car->availability) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="availability-1">Available</label>
        </div>
        @error('availability')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
var models = @json($models);

$('#marque').change(function () {
    var selectedMarque = $(this).val();
    $('#model option').hide().prop('disabled', true);

    models.forEach(function (model) {
        if (model.marque_id == selectedMarque) {
            $('#model option[value="' + model.id + '"]').show().prop('disabled', false);
        }
    });

    $('#model').val('').change();
});
});
</script>
@endsection
