@extends('layouts.master_page')
@section('title','Manage Rent')
@section('content')
@php
    use Carbon\Carbon;
@endphp
<div id="">
    <div class="container justify-content-center mt-3">
        @include('layouts.flash')
    </div>
<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Rent</h4>
                                <div class="d-flex justify-content-end">
                                    <a href="/admin/managerent/create" class="btn btn-primary">New Rent</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>

                                                <th scope="col">matricule</th>
												<th scope="col">customer</th>
												<th scope="col">rental_start_date</th>
												<th scope="col">rental_end_date</th>
												<th scope="col">nombre de jour</th>
												<th scope="col">Create At</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($rents  as $r)
                                            <tr>
                                                @if ($r->car) <!-- Check if 'car' relationship exists -->
                                                <td>{{$r->car->matricule}}</td>
                                            @else
                                                <td>N/A</td>
                                            @endif
												    {{-- <td>{{$r->cars->matricule}}</td> --}}
													@if ($r->customer) <!-- Check if 'car' relationship exists -->
                                                <td>{{$r->customer->first_name}} {{$r->customer->last_name}}</td>
                                            @else
                                                <td>N/A</td>
                                            @endif
													<td>{{$r["rental_start_date"]}}</td>
													<td>{{$r["rental_end_date"]}}</td>
													<td>{{ \Carbon\Carbon::parse($r['rental_start_date'])->diffInDays(\Carbon\Carbon::parse($r['rental_end_date'])) }}</td>
                                                    <td>{{$r["created_at"]}}</td>
													<td>
													<div class="d-flex">
                                                        <a href="{{ route('user.Invoice', ['rentId' => $r->id]) }}" class="btn btn-primary"><i class="fas fa-file-invoice"></i></a>
														<form action="/admin/managerent/{{ $r->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $r->id }}">
                                                                <i class="fas fa-trash"></i>
                                                            </button>

                                                            <!-- Modal de confirmation -->
                                                            <div class="modal fade" id="exampleModal-{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation de suppression</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Êtes-vous sûr de vouloir supprimer cet objet ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
													</div>
												</td>
												</tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>



</div>
@endsection


