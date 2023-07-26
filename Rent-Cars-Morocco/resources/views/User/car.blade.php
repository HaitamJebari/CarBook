@extends('user.layouts.master-page')
@section('title','Rent-car')
@section('content')


    <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5"><img class="hero-wrap hero-wrap-2 js-fullheight" src={{ asset("/Layouts/images/bg_3.jpg") }} alt="">
    </a>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url("/ind") }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
                @foreach ($Cars as $item)
    			<div class="col-md-4">

    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end"><img class="img rounded d-flex align-items-end" src="{{ asset('car_images/'.$item->picture) }}"  alt="not found">
                        </a>
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="{{ url("car-single") }}">	{{ $item->marque->name }} {{ $item->model->name }}
                            </a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">	{{ $item->marque->name }}-	{{ $item->category->name }}</span>
	    						<p class="price ml-auto">${{ $item->price_per_day }} <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('user.bookingcar', ['marque' => $item->id]) }}" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('user.car-single', ['matricule' => $item->id]) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>

    			</div>
@endforeach
    		</div>
    		{{-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="{{ url("#") }}">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="{{ url("#") }}">2</a></li>
                <li><a href="{{ url("#") }}">3</a></li>
                <li><a href="{{ url("#") }}">4</a></li>
                <li><a href="{{ url("#") }}">5</a></li>
                <li><a href="{{ url("#") }}">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
    	</div>{{ $Cars->links('user.Layouts.pagination') }}
    </section>





@endsection
