<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Http\Requests\Tamu\StoreRequest;
use App\Http\Requests\Tamu\UpdateRequest;

class TamuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Tamu::all();

        return view('tamu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('foto_tamu')){
            $File = 'foto_tamu_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_tamu')->move($Path, $File);

            $input['foto_tamu'] = $File;
        }
        if($request->hasFile('foto_ktp')){
            $File = 'foto_ktp_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_ktp')->move($Path, $File);

            $input['foto_ktp'] = $File;
        }
        if($request->hasFile('foto_plat_nomor')){
            $File = 'foto_plat_nomor_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_plat_nomor')->move($Path, $File);

            $input['foto_plat_nomor'] = $File;
        }
        Tamu::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('tamu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Tamu::find($id);
        return view('tamu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $model = Tamu::find($id);
        $input = $request->all();
        if($request->hasFile('foto_tamu')){
            $File = 'foto_tamu_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_tamu')->move($Path, $File);

            $input['foto_tamu'] = $File;
        }
        if($request->hasFile('foto_ktp')){
            $File = 'foto_ktp_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_ktp')->move($Path, $File);

            $input['foto_ktp'] = $File;
        }
        if($request->hasFile('foto_plat_nomor')){
            $File = 'foto_plat_nomor_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/dokumen-tamu';
            $request->file('foto_plat_nomor')->move($Path, $File);

            $input['foto_plat_nomor'] = $File;
        }
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tamu::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('tamu');
    }

    public function delete(Request $request)
    {
        $category = Tamu::find($request->id);
        $category->delete();

        return 'success';
    }
}
