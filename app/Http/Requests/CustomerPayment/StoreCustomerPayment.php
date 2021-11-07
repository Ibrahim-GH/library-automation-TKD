<?php

namespace App\Http\Requests\CustomerPayment;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerPayment extends FormRequest
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
            'customer_id' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i:s',
            'amount' => 'required|numeric|gt:0',
            'notes' => 'string|nullable',
        ];
    }
}
