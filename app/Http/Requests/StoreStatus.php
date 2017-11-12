<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStatus extends FormRequest
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
            'nm_status_kawin'  => 'required|string|max:50|unique:ref_status_kawin',
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
            'nm_status_kawin.required' => 'Status kawin harus diisi!',
            'nm_status_kawin.string'  => 'Status kawin harus diisi huruf / angka',
            'nm_status_kawin.max'  => 'Maximum input adalah 50 karakter',
            'nm_status_kawin.unique'  => 'Nama status kawin  sudah terdaftar',
        ];
    }
}
