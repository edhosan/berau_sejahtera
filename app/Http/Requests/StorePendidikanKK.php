<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePendidikanKK extends FormRequest
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
            'nm_pendidikan_kk'  => 'required|string|max:255|unique:ref_pendidikan_kk',
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
            'nm_pendidikan_kk.required' => 'Pendidikan dalam KK harus diisi!',
            'nm_pendidikan_kk.string'  => 'Pendidikan dalam KK harus diisi huruf / angka',
            'nm_pendidikan_kk.max'  => 'Maximum input adalah 255 karakter',
            'nm_pendidikan_kk.unique'  => 'Pendidikan dalam KK sudah terdaftar',
        ];
    }
}
