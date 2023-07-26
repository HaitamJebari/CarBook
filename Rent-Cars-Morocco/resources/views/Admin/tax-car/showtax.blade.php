@extends('layouts.master_page')
@section('title','Manage Tax')
@section('content')
<div class="container justify-content-center mt-3">
    @include('layouts.flash')
</div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Tax</h4>
                                <div class="d-flex justify-content-end">
                                    <a href="/admin/managetax/create" class="btn btn-primary">new tax</a>
                                  </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display min-w850 ">
                                        <thead>
                                             <tr>
											<th scope="col">id</th>
											<th scope="col">Matricule</th>
											<th scope="col">Prochain assurance_date</th>
											<th scope="col">Prochain Visite_technique_date</th>
											<th scope="col">Vingette</th>
											<th scope="col">Status</th>

											<th scope="col">Manage</th>
										  </tr>

                                        </thead>
                                        <tbody>
										@foreach ($tax as $t)
                                            <tr>

												    <td>{{$t["id"]}}</td>
													<td>{{$t["matricule"]}}</td>
													<td>{{$t["assurance"]}}</td>
													<td>{{$t["visite_technique"]}}</td>
													<td>{{$t["vignette"]}}</td>
													<td>@if($t["status"]==1)    <span class="badge light badge-success">
                                                        <i class="fa fa-circle text-success mr-1"></i>
                                                            paid
                                                    </span>
                                                        @else
                                                        <span class="badge light badge-danger">
                                                            <i class="fa fa-circle text-danger mr-1"></i>
                                                            no paid
                                            </span>
                                                        @endif</td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/admin/managetax/{{ $t->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                            <form action="/admin/managetax/{{ $t->id }}" method="POST">
                                                                @csrf
                                                                @method('delete')

                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $t->id }}">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>

                                                                <!-- Modal de confirmation -->
                                                                <div class="modal fade" id="exampleModal-{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection
