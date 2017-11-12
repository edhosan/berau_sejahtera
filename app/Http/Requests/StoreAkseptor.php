<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAkseptor extends FormRequest
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
            'nm_akseptor' => 'required|string|max:100|unique:ref_kb,nm_kb',
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
            'nm_akseptor.required' => 'Nama akseptor KB harus diisi!',
            'nm_akseptor.string'  => 'Nama akseptor KB harus diisi huruf / angka',
            'nm_akseptor.max'  => 'Maximum input adalah 100 karakter',
            'nm_akseptor.unique'  => 'Nama akseptor KB sudah terdaftar',
        ];
    }
}
