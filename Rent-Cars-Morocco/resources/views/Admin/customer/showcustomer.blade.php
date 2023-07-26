@extends('layouts.master_page')
@section('title','Manage Customers')
@section('content')

    <div class="container justify-content-center mt-3">
        @include('layouts.flash')
    </div>
<div id="main warpper">
<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">manage coustumers</h4>
                                <div class="d-flex justify-content-end">
                                    <a href="/admin/managecustomer/create" class="btn btn-primary">new customer</a>
                                  </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                             <tr>
											<th scope="col">id</th>
											<th scope="col">Full Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone Number</th>
											<th scope="col">driving_l_n</th>
											<th scope="col">Address</th>
											<th scope="col">Manage</th>


										  </tr>

                                        </thead>
                                        <tbody>
										@foreach ($user as $cr)
                                            <tr>

												    <td>{{$cr["id"]}}</td>
													<td>{{$cr["name"]}}</td>
													<td>{{$cr["email"]}}</td>
													<td>{{$cr["phone_number"]}}</td>
													<td>{{$cr["driving_license_number"]}}</td>
													<td>{{$cr["address"]." ".$cr["city"]." ".$cr["state"]." ".$cr["zip_code"]}}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/admin/managecustomer/{{ $cr->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>


                                                            <form action="/admin/managecustomer/{{ $cr->id }}" method="POST">
                                                                @csrf
                                                                @method('delete')

                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $cr->id }}">

                                                                     <i class="fas fa-trash"></i>

                                                                </button>

                                                                <!-- Modal de confirmation -->
                                                                <div class="modal fade" id="exampleModal-{{ $cr->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
