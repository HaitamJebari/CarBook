@extends('layouts.master_page')
@section('title','Manage cars')
@section('content')
<div id="main-wrapper">
<div class="row">
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">manage Datatable</h4>
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
												<th scope="col">options</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($cars as $cr)
                                            <tr>
                                                <td><img src="{{ asset('images/cars/'.$cr['picture']) }}" alt="picture " class="img-fluid" width="100"></td>
												    <td>{{$cr["matricule"]}}</td>
													<td>{{$cr["marque"]}}</td>
													<td>{{$cr["model"]}}</td>
													<td>{{$cr["category"]}}</td>
													<td>{{$cr["year"]}}</td>
													<td>${{$cr["rental_price"]}}<span>/day</span></td>
													<td>{{$cr["options"]}}</td>
													<td>
													<div class="d-flex">
														<a href="{{ url("#") }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="{{ url("#") }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
