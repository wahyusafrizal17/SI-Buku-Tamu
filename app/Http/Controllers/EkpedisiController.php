<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Ekpedisi\StoreRequest;
use App\Http\Requests\Ekpedisi\UpdateRequest;
use App\Models\Ekpedisi;

class EkpedisiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Ekpedisi::all();

        return view('ekpedisi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekpedisi.create');
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
        if($request->hasFile('foto_penyerahan_surat')){
            $File = 'foto_penyerahan_surat_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/ekpedisi';
            $request->file('foto_penyerahan_surat')->move($Path, $File);

            $input['foto_penyerahan_surat'] = $File;
        }
        Ekpedisi::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('ekpedisi-surat');
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
        $data['model'] = Ekpedisi::find($id);
        return view('ekpedisi.edit', $data);
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
        $model = Ekpedisi::find($id);
        $input = $request->all();
        if($request->hasFile('foto_penyerahan_surat')){
            $File = 'foto_penyerahan_surat_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/ekpedisi';
            $request->file('foto_penyerahan_surat')->move($Path, $File);

            $input['foto_penyerahan_surat'] = $File;
        }
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('ekpedisi-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Ekpedisi::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('ekpedisi');
    }

    public function delete(Request $request)
    {
        $category = Ekpedisi::find($request->id);
        $category->delete();

        return 'success';
    }
}
