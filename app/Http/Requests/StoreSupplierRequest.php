<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
{

    public function authorize()
    {
        return true; // Permitir que todos acessem
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'cnpj' => 'required|string|unique:suppliers|max:18',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ];
    }
}
