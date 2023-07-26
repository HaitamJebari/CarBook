
@php
    use Carbon\Carbon;
    $rentalStartDate = $rent['rental_start_date'];
    $rentalEndDate = $rent['rental_end_date'];
    $pricePerDay=$car["rental_price"];
    $numberOfDays = \Carbon\Carbon::parse($rentalStartDate)->diffInDays(\Carbon\Carbon::parse($rentalEndDate));
    $totalAmount = $numberOfDays * $pricePerDay;
    $currentDate = \Carbon\Carbon::now();

@endphp

    <!-- CSS files -->
    <link href="{{ asset("/Layouts/invoice/css/tabler.min.css?1668287865") }}" rel="stylesheet"/>
    <link href="{{ asset("/Layouts/invoice/css/tabler-flags.min.css?1668287865") }}" rel="stylesheet"/>
    <link href="{{ asset("/Layouts/invoice/css/tabler-payments.min.css?1668287865") }}" rel="stylesheet"/>
    <link href="{{ asset("/Layouts/invoice/css/tabler-vendors.min.css?1668287865") }}" rel="stylesheet"/>
    <link href="{{ asset("/Layouts/invoice/css/demo.min.css?1668287865") }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body >
    <div class="page">
	      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Invoice
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                  <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><rect x="7" y="13" width="10" height="8" rx="2" /></svg>
                  Print Invoice
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card card-lg">
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <p class="h3">RentCar</p>
                    <address>
                      street Molay youssef N4<br>
                      Tangier<br>
                    contact@RentCarNorth.ma<br>

                    </address>
                  </div>
                  <div class="col-6 text-end">
                    <p class="h3">{{ $customer->first_name.' '. $customer->last_name}}</p>
                    <address>
                        {{$customer["address"]}}<br>
                      {{ $customer["state"]." ".$customer["city"] }}<br>
                      {{ $customer["zip_code"] }}<br>
                      {{$customer["email"]}}
                    </address>
                  </div>
                  <div class="col-12 my-5">
                    <h1>Invoice INV_ {{$currentDate.'-Id-'.$rent->id }}</h1>
                  </div>
                </div>
                <table class="table table-transparent table-responsive">
                  <thead>
                    <tr>

                      <th>Car</th>
                      <th class="text-center" style="width: 1%">Days</th>
                      <th class="text-end" style="width: 1%">Unit</th>
                      <th class="text-end" style="width: 1%">Total</th>
                    </tr>
                  </thead>
                  <tr>

                    <td>
                      <p class="strong mb-1">{{ $car["marque"].' '.$car["medel"] }}</p>
                      <div class="text-muted">{{ $car["matricule"] }}</div>
                    </td>
                    <td class="text-center">
                        {{ $numberOfDays }}
                    </td>
                    <td class="text-end">${{ $car["rental_price"] }}</td>
                    <td class="text-end">${{ $totalAmount}}</td>
                  </tr>




                  <tr>
                    <td colspan="2" class="font-weight-bold text-uppercase text-end">Total Due</td>
                    <td class="font-weight-bold text-end">${{ $totalAmount}}.00</td>
                  </tr>
                </table>
                <p class="text-muted text-center mt-5">Thank you very much for doing business with us. We look forward to working with
                  you again!</p><br><p class="text-muted text-center">Check ur Mail to get the invoice</p>
              </div>
            </div>
          </div>
        </div>
	</div>
	</div>
