<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCacat extends FormRequest
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
            'nm_cacat' => 'required|string|max:50|unique:ref_cacat',
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nm_cacat.required' => 'Cacat harus diisi!',
            'nm_cacat.string'  => 'Cacat harus diisi huruf / angka',
            'nm_cacat.max'  => 'Maximum input adalah 50 karakter',
            'nm_cacat.unique'  => 'Nama cacat sudah terdaftar',
        ];
    }
}
