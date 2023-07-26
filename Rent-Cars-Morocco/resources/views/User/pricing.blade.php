@extends('user.layouts.master-page')
@section('title','Rent-car')
@section('content')



    <section class="hero-wrap hero-wrap-2 js-fullheight"  data-stellar-background-ratio="0.5"><img class="hero-wrap hero-wrap-2 js-fullheight" src={{ asset("/Layouts/images/bg_3.jpg") }} alt="">
    </a>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url("/ind") }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pricing</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>

						        <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th>
						      </tr>
						    </thead>
						    <tbody>
                                @foreach ($Cars as $item)
						      <tr class="">
						      	<td class="car-image"><img class="img" src="{{ asset('car_images/'.$item->picture) }}" alt="Car Picture">
                                  </a></td>
						        <td class="product-name">
						        	<h3>{{ $item->marque->name }} {{ $item->model->name }}</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>



						        <td class="price">
						        	{{-- <p class="btn-custom"><a href="{{ route('user.bookingcar', ['marque' => $item->marque]) }}) }}">Rent a car</a></p> --}}
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small>{{ $item->price_per_day }}</span>
							        		<span class="per">/per day</span>
							        	</h3>
						        </div>
						        </td>

						        <td class="price">
						        	{{-- <p class="btn-custom"><a href="{{ route('user.bookingcar', ['marque' => $item->marque]) }}">Rent a car</a></p> --}}
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small>{{ $item->price_per_day * 30 }}</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      @endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

@endsection
