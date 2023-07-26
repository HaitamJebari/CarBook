
@extends('layouts.master_page')
@section('title','Edit Entretien')
@section('content')
<div class="container">
    <h1>Edit Entretien</h1>
<form action="/admin/manageentretien/{{$entretien->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="car_id">Car ID:</label>
        <input type="text" class="form-control" id="car_id" name="car_id" value="{{ $entretien->car->matricule }}" readonly>
    </div>

    <div class="form-group">
        <label for="km">KM:</label>
        <input type="number" class="form-control @error('km') is-invalid @enderror" id="km" name="km"
            value="{{ old('km', $entretien->km) }}">
        @error('km')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type_entretien">Type d'Entretien:</label>
        <input type="text" class="form-control @error('type_entretien') is-invalid @enderror" id="type_entretien"
            name="type_entretien" value="{{ old('type_entretien', $entretien->type_entretien) }}">
        @error('type_entretien')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="maintenance_description">Maintenance Description:</label>
        <input type="text" class="form-control @error('maintenance_description') is-invalid @enderror"
            id="maintenance_description" name="maintenance_description"
            value="{{ old('maintenance_description', $entretien->maintenance_description) }}">
        @error('maintenance_description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="maintenance_date">Maintenance Date:</label>
        <input type="date" class="form-control @error('maintenance_date') is-invalid @enderror" id="maintenance_date"
            name="maintenance_date" value="{{ old('maintenance_date', $entretien->maintenance_date) }}">
        @error('maintenance_date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="total_amount">Total Amount:</label>
        <input type="number" class="form-control @error('total_amount') is-invalid @enderror" id="total_amount"
            name="total_amount" value="{{ old('total_amount', $entretien->total_amount) }}">
        @error('total_amount')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>


@endsection
