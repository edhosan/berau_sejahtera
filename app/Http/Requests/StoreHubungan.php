<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHubungan extends FormRequest
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
            'nm_hubungan' => 'required|string|max:50|unique:ref_hubungan',
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
            'nm_hubungan.required' => 'Hubungan keluarga harus diisi!',
            'nm_hubungan.string'  => 'Hubungan keluarga harus diisi huruf / angka',
            'nm_hubungan.max'  => 'Maximum input adalah 50 karakter',
            'nm_hubungan.unique'  => 'Nama hubungan keluarga  sudah terdaftar',
        ];
    }
}
