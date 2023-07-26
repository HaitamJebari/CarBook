<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class booking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'driving_license_number' => 'required|string|max:255',
            'rental_start_date' => 'required|date',
            'rental_end_date' => 'required|date',
            // 'car' => 'required|string|max:255',

        ];
    }
    public function messages()
    {
        return [
            'full_name.required' => 'err',
            'password.required' => 'err',
            'email.required' => 'err',
            'phone_number.required' => 'err',
            'address.required' => 'err',
            'city.required' => 'err',
            'state.required' => 'err',
            'driving_license_number.required' => 'err',
            'rental_start_date.required' => 'err',
            'rental_end_date.required' => 'err',
            // 'car.required' => 'err',

        ];
    }
}
