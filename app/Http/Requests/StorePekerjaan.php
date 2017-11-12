<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePekerjaan extends FormRequest
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
           'nm_pekerjaan'  => 'required|string|max:255|unique:ref_pekerjaan',
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
            'nm_pekerjaan.required' => 'Pekerjaan harus diisi!',
            'nm_pekerjaan.string'  => 'Pekerjaan harus diisi huruf / angka',
            'nm_pekerjaan.max'  => 'Maximum input adalah 255 karakter',
            'nm_pekerjaan.unique'  => 'Nama pekerjaan  sudah terdaftar',
        ];
    }
}
