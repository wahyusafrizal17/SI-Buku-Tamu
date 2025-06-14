<?php

namespace App\Http\Requests\Tamu;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nama'              => 'required',
            'no_hp'             => 'required',
            'alamat'            => 'required',
            'instansi'          => 'required',
            'no_identitas'      => 'required',
            'no_kendaraan'      => 'required',
            'keperluan'         => 'required',
            'jam_masuk'         => 'required',
            'jam_keluar'        => 'required',
            'foto_tamu'         => 'required',
            'foto_ktp'          => 'required',
            'foto_plat_nomor'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required'                   => 'Nama tidak boleh kosong',
            'no_hp.required'                  => 'Nomor HP tidak boleh kosong',
            'alamat.required'                 => 'Alamat tidak boleh kosong',
            'instansi.required'               => 'Instansi tidak boleh kosong',
            'no_identitas.required'           => 'Nomor identitas tidak boleh kosong',
            'no_kendaraan.required'           => 'Nomor kendaraan tidak boleh kosong',
            'keperluan.required'              => 'Keperluan tidak boleh kosong',
            'jam_masuk.required'              => 'Jam masuk tidak boleh kosong',
            'jam_keluar.required'             => 'Jam keluar tidak boleh kosong',
            'foto_tamu.required'              => 'Foto tamu tidak boleh kosong',
            'foto_ktp.required'               => 'Foto KTP tidak boleh kosong',
            'foto_plat_nomor.required'        => 'Foto plat nomor tidak boleh kosong',
        ];
    }
}
