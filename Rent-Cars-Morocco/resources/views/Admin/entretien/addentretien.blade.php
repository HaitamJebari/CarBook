@extends('layouts.master_page')
@section('title','Add Entretien')
@section('content')

        <h1>Create Entretien</h1>
        <form method="POST" action="/admin/manageentretien"  method="POST" enctype="multipart/form-data">
            @csrf
            @csrf

        <div class="form-group">
            <label for="car_id">Car:</label>
            <select class="form-control @error('car_id') is-invalid @enderror" id="car_id" name="car_id">
                <option value="" selected>Select Car</option>
                @foreach($matricules as $car)
                    <option value="{{ $car->id }}">{{ $car->matricule }} - {{ $car->marque->name }} {{ $car->model->name }}</option>
                @endforeach
            </select>
            @error('car_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="km">KM:</label>
            <input type="number" class="form-control @error('km') is-invalid @enderror" id="km" name="km" value="{{ old('km') }}">
            @error('km')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type_entretien">Type d'Entretien:</label>
            <input type="text" class="form-control @error('type_entretien') is-invalid @enderror" id="type_entretien" name="type_entretien" value="{{ old('type_entretien') }}">
            @error('type_entretien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="maintenance_description">Maintenance Description:</label>
            <input type="text" class="form-control @error('maintenance_description') is-invalid @enderror" id="maintenance_description" name="maintenance_description" value="{{ old('maintenance_description') }}">
            @error('maintenance_description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="maintenance_date">Maintenance Date:</label>
            <input type="date" class="form-control @error('maintenance_date') is-invalid @enderror" id="maintenance_date" name="maintenance_date" value="{{ old('maintenance_date') }}">
            @error('maintenance_date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="total_amount">Total Amount:</label>
            <input type="text" class="form-control @error('total_amount') is-invalid @enderror" id="total_amount" name="total_amount" value="{{ old('total_amount') }}">
            @error('total_amount')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Entretien</button>
    </form>

@endsection
