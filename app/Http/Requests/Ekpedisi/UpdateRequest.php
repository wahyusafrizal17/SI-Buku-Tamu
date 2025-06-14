<?php

namespace App\Http\Requests\Ekpedisi;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_pengirim'         => 'required',
            'nama_instansi'         => 'required',
            'nama_penerima'         => 'required',
            'tanggal'               => 'required',
            'tujuan'                => 'required',
            'jam'                   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_pengirim.required'         => 'Nama pengirim tidak boleh kosong',
            'nama_instansi.required'         => 'Nama instansi tidak boleh kosong',
            'nama_penerima.required'         => 'Nama penerima tidak boleh kosong',
            'tanggal.required'               => 'Tanggal tidak boleh kosong',
            'tujuan.required'                => 'Tujuan tidak boleh kosong',
            'jam.required'                   => 'Jam tidak boleh kosong',
        ];
    }
}
