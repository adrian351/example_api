<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cotizacion extends FormRequest
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
            'Name',
            'CantProduct'   => 'required',
            'FirtsName',
            'Phone',
            'Company',
            'City'          => 'required',
            'PostalCode'    =>  'required',
            'Comments',
            'Total'
        ];
    }
}
