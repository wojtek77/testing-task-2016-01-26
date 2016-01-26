<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VehicleRequest extends Request
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
            'name' => 'required|max:255',
            'registration_number' => 'required|max:7|regex:/^[A-Z]{3}\d{4}$/',
            'engine_capacity' => 'required|min:0|regex:/^[0-9.]+$/',
            'mileage_counter' => 'required|min:0|regex:/^[0-9.]+$/',
            'last_oil_change' => 'required',
        ];
    }
}
