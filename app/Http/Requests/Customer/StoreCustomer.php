<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            'company' => 'required|string|unique:customers|max:200',
            'name' => 'string|nullable|max:200',
            'phone' => 'numeric|nullable',
            'mobile' => 'numeric|nullable',
            'address' => 'string|nullable',
            'notes' => 'string|nullable',
        ];
    }
}
