<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\MarqueCar;
use App\Models\ModelCar;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.showcars',["cars"=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marques = MarqueCar::all();
        $models = ModelCar::all();
        $categories=Category::all();



        return view("admin.car.addcars", compact('marques', 'models','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matricule' => 'required',
            'marque' => 'required',
            'model' => 'required',
            'category' => 'required',
            'year' => 'required|numeric',
            'rental_price' => 'required|numeric',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'color' => 'required',
            'availability' => 'required|in:0,1',
        ]);

        $car = new Car();
        $car->matricule = $validatedData['matricule'];
        $car->marque_id = $validatedData['marque'];
        $car->model_id = $validatedData['model'];
        $car->category_id = $validatedData['category'];
        $car->year = $validatedData['year'];
        $car->price_per_day = $validatedData['rental_price'];
        $car->color = $validatedData['color'];
        $car->is_available = $validatedData['availability'];

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('car_images'), $pictureName);
            $car->picture = $pictureName;
        }

        $car->save();

        return redirect('/admin/managecars')->with('success', 'Car added successfully.');
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
        $car=Car::find($id);
        $marques = MarqueCar::all();
        $models = ModelCar::all();
        $categories=Category::all();
        return view('admin.car.editcars',compact('marques', 'models','categories','car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $validatedData = $request->validate([
        'matricule' => 'required',
        'marque' => 'required',
        'model' => 'required',
        'category' => 'required',
        'year' => 'required|numeric',
        'rental_price' => 'required|numeric',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'color' => 'required',
        'availability' => 'required|in:0,1',
    ]);

    $car = Car::findOrFail($id);
    $car->matricule = $validatedData['matricule'];
    $car->marque_id = $validatedData['marque'];
    $car->model_id = $validatedData['model'];
    $car->category_id = $validatedData['category'];
    $car->year = $validatedData['year'];
    $car->price_per_day = $validatedData['rental_price'];
    $car->color = $validatedData['color'];
    $car->is_available = $validatedData['availability'];

    if ($request->hasFile('picture')) {
        $picture = $request->file('picture');
        $pictureName = time() . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('car_images'), $pictureName);
        $car->picture = $pictureName;
    }

    $car->save();

    return redirect('/admin/managecars')->with('success', 'Car updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars= Car::find($id);
        $cars->delete();
        return back()->with('successdelete','You have successfully deleted an Car.');
    }
    public function booking($marque){

        $car = Car::where("id","=",$marque)->first();
        return view('user.bookingcar', ['car' => $car]);
    }

    public function dt_cars($id){

        $car = Car::where("id","=",$id)->first();
        return view('user.car-single', ['car' => $car]);
    }

}
