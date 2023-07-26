@extends('layouts.master_page')
@section('title','Manage Maintenances')
@section('content')
<div id="">
    <div class="container justify-content-center mt-3">
        @include('layouts.flash')
    </div>
<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Maintenances</h4>
                                <div class="d-flex justify-content-end">
                                    <a href="/admin/manageentretien/create" class="btn btn-primary">New Entretien</a>
                                  </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                             <tr>
											<th scope="col">id</th>
											<th scope="col">Matricule</th>
											<th scope="col">Type_entretien</th>
											<th scope="col">Km</th>
											<th scope="col">Date_entretien</th>
											<th scope="col">Montant</th>
											<th scope="col">Deseiption</th>
											<th scope="col">Manage</th>


										  </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($entretiens as $entretien)
                                            <tr>
                                                <td>{{ $entretien->id }}</td>
                                                <td>{{ $entretien->car->matricule }}</td>
                                                <td>{{ $entretien->type_entretien }}</td>
                                                <td>{{ $entretien->km }}</td>
                                                <td>{{ $entretien->maintenance_date }}</td>
                                                <td>{{ $entretien->total_amount }}</td>
                                                <td>{{ $entretien->maintenance_description }}</td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/admin/manageentretien/{{ $entretien->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            <form action="/admin/manageentretien/{{ $entretien->id }}" method="POST">
                                                                @csrf
                                                                @method('delete')

                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $entretien->id }}">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>

                                                                <!-- Modal de confirmation -->
                                                                <div class="modal fade" id="exampleModal-{{ $entretien->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
