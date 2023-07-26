@extends('layouts.master_page')
@section('title','Manage cars')
@section('content')
<div id="">
    <div class="container justify-content-center mt-3">
        @include('layouts.flash')
    </div>
<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Cars</h4>
                                <div class="d-flex justify-content-end">
                                    <a href="/admin/managecars/create" class="btn btn-primary">new car</a>
                                  </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                 <th scope="col">matricule</th>
												<th scope="col">marque</th>
												<th scope="col">model</th>
												<th scope="col">category</th>
												<th scope="col">year</th>
												<th scope="col">rental_price</th>
												<th scope="col">color</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($cars as $car)
                                            <tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('car_images/'.$car->picture) }}" alt="Car Picture" class="img-fluid" width="100">
                                                    </td>
                                                    <td>{{ $car->matricule }}</td>
                                                    <td>{{ $car->marque->name }}</td>
                                                    <td>{{ $car->model->name }}</td>
                                                    <td>{{ $car->category->name }}</td>
                                                    <td>{{ $car->year }}</td>
                                                    <td>${{ $car->price_per_day }}<span>/day</span></td>
                                                    <td>{{ $car->color }}</td>
                                                    <td>
													<td>
													<div class="d-flex">
														<a href="/admin/managecars/{{ $car->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
														<form action="/admin/managecars/{{ $car->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $car->id }}">
                                                                <i class="fas fa-trash"></i>
                                                            </button>

                                                            <!-- Modal de confirmation -->
                                                            <div class="modal fade" id="exampleModal-{{ $car->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


