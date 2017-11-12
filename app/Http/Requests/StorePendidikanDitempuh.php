<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePendidikanDitempuh extends FormRequest
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
           'nm_pendidikan_ditempuh'  => 'required|string|max:255|unique:ref_pendidikan_ditempuh',
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
            'nm_pendidikan_ditempuh.required' => 'Pendidikan sedang ditempuh harus diisi!',
            'nm_pendidikan_ditempuh.string'  => 'Pendidikan sedang ditempuh harus diisi huruf / angka',
            'nm_pendidikan_ditempuh.max'  => 'Maximum input adalah 255 karakter',
            'nm_pendidikan_ditempuh.unique'  => 'Pendidikan sedang ditempuh sudah terdaftar',
        ];
    }
}
