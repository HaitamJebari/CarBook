<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\EntretienCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entretiens = EntretienCar::all();
        return view('admin.entretien.showentretien',["entretiens"=>$entretiens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matricules =Car::all();

        return view('admin.entretien.addentretien', ['matricules' => $matricules]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'maintenance_description' => 'required|string|max:255',
            'maintenance_date' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
            'km' => 'required|integer|min:0',
            'type_entretien' => 'required|string|max:255',
        ]);

        // Create a new entretien record
        $entretien = new EntretienCar();
        $entretien->car_id = $validatedData['car_id'];
        $entretien->maintenance_description = $validatedData['maintenance_description'];
        $entretien->maintenance_date = $validatedData['maintenance_date'];
        $entretien->total_amount = $validatedData['total_amount'];
        $entretien->km = $validatedData['km'];
        $entretien->type_entretien = $validatedData['type_entretien'];
        $entretien->save();


        return redirect('/admin/manageentretien/')->with('success', 'Entretien added successfully.');
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
    public function edit($id)
{
    $entretien = EntretienCar::findOrFail($id);
    return view('admin.entretien.editentretien', compact('entretien'));
}

public function update(Request $request, $id)
{

    $validatedData = $request->validate([
        'maintenance_description' => 'required|string|max:255',
            'maintenance_date' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
            'km' => 'required|integer|min:0',
            'type_entretien' => 'required|string|max:255',
    ]);

    $entretien = EntretienCar::find($id);
    $entretien->maintenance_description = $validatedData['maintenance_description'];
        $entretien->maintenance_date = $validatedData['maintenance_date'];
        $entretien->total_amount = $validatedData['total_amount'];
        $entretien->km = $validatedData['km'];
        $entretien->type_entretien = $validatedData['type_entretien'];
        $entretien->save();
    $entretien->save();
    return redirect('/admin/manageentretien/')->with('success', 'Entretien updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entretien= EntretienCar::find($id);
        $entretien->delete();
        return back()->with('successdelete','You have successfully deleted an Entretien.');
    }
}
