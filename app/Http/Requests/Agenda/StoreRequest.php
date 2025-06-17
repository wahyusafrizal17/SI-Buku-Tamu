<?php

namespace App\Http\Requests\Agenda;

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
            'nama_pt'         => 'required',
            'jenis_pekerjaan' => 'required',
            'jumlah_pekerja'  => 'required',
            'tanggal'         => 'required',
            'foto_ktp'        => 'required',
            'jam_masuk'       => 'required',
            'jam_keluar'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_pt.required'         => 'Nama perusahaan tidak boleh kosong',
            'jenis_pekerjaan.required' => 'Jenis pekerjaan tidak boleh kosong',
            'jumlah_pekerja.required'  => 'Jumlah pekerja tidak boleh kosong',
            'tanggal.required'         => 'Tanggal tidak boleh kosong',
            'foto_ktp.required'        => 'Foto KTP tidak boleh kosong',
            'jam_masuk.required'       => 'Jam masuk tidak boleh kosong',
            'jam_keluar.required'      => 'Jam keluar tidak boleh kosong',
        ];
    }

}
