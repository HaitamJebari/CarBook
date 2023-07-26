<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\bookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();

        return view('user.booking', ["cars"=>$cars]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookingRequest $request)
    {
        $validatedData = $request->validate([
            'full-name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'dln_picture' => 'required|image|max:2048',
            'driving_license_number' => 'required|string|max:255',
            'rental_start_date' => 'required|date',
            'rental_end_date' => 'required|date',
            //'car' => 'required|string|max:255',

        ]);
        // Save user information
        $customer = new User();
        $role='user';
        $customer->name = $validatedData['full_name'];
        $customer->email = $validatedData['email'];
        $customer->phone_number = $validatedData['phone_number'];
        $customer->address = $validatedData['address'];
        $customer->city = $validatedData['city'];
        $customer->state = $validatedData['state'];
        $customer->zip_code = $validatedData['zip_code'];
        $customer->role = $role;
        $customer->driving_license_picture = $validatedData['dln_picture']->store('public/uploads');
        $customer->driving_license_number = $validatedData['driving_license_number'];
        $customer->save();

        // Save rental information
        $rental = new Booking();
        $rental->user_id = $customer->id;
        $rental->pickup_date = $validatedData['rental_start_date'];
        $rental->return_date = $validatedData['rental_end_date'];
        $rental->car_id = $validatedData['car'];

        $rental->calculateCost();
        $rental->save();

        return redirect('/')->with('success', 'Rental car booked successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
