@extends('layouts.master_page')
@section('title','Add Tax')
@section('content')
    <div class="container">
        <h1>Create Tax</h1>
        <form method="POST" action="/admin/managetax"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="car_id">Car:</label>
                <select class="form-control @error('car_id') is-invalid @enderror" id="car_id" name="car_id">
                    <option value="" selected>Select Car</option>
                    @foreach ($matricules as $car)
                        <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>
                            {{ $car->matricule }} - {{ $car->marque->name }} {{ $car->model->name }}
                        </option>
                    @endforeach
                </select>
                @error('car_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="assurance">Assurance (Date):</label>
                <input type="date" class="form-control @error('assurance') is-invalid @enderror" id="assurance" name="assurance" value="{{ old('assurance') }}">
                @error('assurance')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="visite_technique">Visite Technique (Date):</label>
                <input type="date" class="form-control @error('visite_technique') is-invalid @enderror" id="visite_technique" name="visite_technique" value="{{ old('visite_technique') }}">
                @error('visite_technique')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="vignette">Vignette (Date):</label>
                <input type="date" class="form-control @error('vignette') is-invalid @enderror" id="vignette" name="vignette" value="{{ old('vignette') }}">
                @error('vignette')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="" selected>Select Status</option>
                    <option value="1" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
