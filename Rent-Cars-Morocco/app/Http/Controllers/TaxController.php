<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\TaxCar;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tax = TaxCar::all();
        return view('admin.tax-car.showtax',["tax"=>$tax]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matricules =Car::all();

        return view('Admin.tax-car.addtax', ['matricules' => $matricules]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|integer',
            'assurance' => 'required|date',
            'visite_technique' => 'required|date',
            'vignette' => 'required|date',
            'status' => 'required|in:1,0',
        ]);

        $tax = new TaxCar();
        $tax->car_id = $request->input('car_id');
        $tax->assurance = $request->input('assurance');
        $tax->visite_technique = $request->input('visite_technique');
        $tax->vignette = $request->input('vignette');
        $tax->status = $request->input('status');
        $tax->save();

        return redirect('/admin/managetax')->with('success', 'Tax information added successfully.');
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
        $tax = TaxCar::findOrFail($id);
        return view('admin.tax-car.edittax', compact('tax'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'assurance' => 'required|date',
            'visite_technique' => 'required|date',
            'vignette' => 'required|date',
            'status' => 'required|in:0,1',
        ]);

        $tax = TaxCar::find($id);
        if (!$tax) {
            return redirect('/admin/managetax')->with('error', 'Tax not found.');
        }
        $tax->assurance = $request->input('assurance');
        $tax->visite_technique = $request->input('visite_technique');
        $tax->vignette = $request->input('vignette');
        $tax->status = $request->input('status');
        $tax->save();
        return redirect('/admin/managetax')->with('success', 'Tax information updated  successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tax = TaxCar::findOrFail($id);
        $tax->delete();
        return back()->with('successdelete','You have successfully deleted an Tax.');
    }
}
