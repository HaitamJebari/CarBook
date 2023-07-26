<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.customer.showcustomer',["user"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.customer.addcustomer");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|integer|min:18',
            'phone_number' => 'required|string',
            'driving_license_number' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'dln_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if user is above 18 years old
        if ($validatedData['age'] < 18) {
            return redirect()->back()->withErrors(['age' => 'You must be 18 years or older to register.'])->withInput();
        }

        // Handle the driving license picture
        $dlnPicture = $request->file('dln_picture');
        $dlnPictureName = time() . '.' . $dlnPicture->getClientOriginalExtension();
        $dlnPicture->move(public_path('dln_pictures'), $dlnPictureName);

        // Create the user record
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->age = $validatedData['age'];
        $user->phone_number = $validatedData['phone_number'];
        $user->driving_license_number = $validatedData['driving_license_number'];
        $user->address = $validatedData['address'];
        $user->city = $validatedData['city'];
        $user->state = $validatedData['state'];
        $user->zip_code = $validatedData['zip_code'];
        $user->dln_picture = $dlnPictureName;
        $user->save();

        return redirect('/admin/managecustomer/')->with('success', 'User registered successfully.');
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
        $user =User::find($id);
        return view('Admin.customer.editcustomer',["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'age' => 'required|integer|min:18',
            'phone_number' => 'required|string',
            'driving_license_number' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
        ]);

        // Check if user is above 18 years old
        if ($validatedData['age'] < 18) {
            return redirect()->back()->withErrors(['age' => 'You must be 18 years or older.'])->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->age = $validatedData['age'];
        $user->phone_number = $validatedData['phone_number'];
        $user->driving_license_number = $validatedData['driving_license_number'];
        $user->address = $validatedData['address'];
        $user->city = $validatedData['city'];
        $user->state = $validatedData['state'];
        $user->zip_code = $validatedData['zip_code'];
        $user->save();

        return redirect('/admin/managecustomer/')->with('success', 'User updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/managecustomer/')->with('success', 'User deleted successfully.');
    }
}
