<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGolongan extends FormRequest
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
            'nm_golongan' => 'required|string|max:20|unique:ref_golongan',
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
            'nm_golongan.required' => 'Golongan darah harus diisi!',
            'nm_golongan.string'  => 'Golongan darah harus diisi huruf / angka',
            'nm_golongan.max'  => 'Maximum input adalah 20 karakter',
            'nm_golongan.unique'  => 'Nama golongan darah  sudah terdaftar',
        ];
    }
}
