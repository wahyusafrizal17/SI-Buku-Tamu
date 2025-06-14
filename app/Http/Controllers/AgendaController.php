<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests\Agenda\StoreRequest;
use App\Http\Requests\Agenda\UpdateRequest;

class AgendaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Agenda::all();

        return view('agenda.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
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
        if($request->hasFile('foto_ktp')){
            $File = 'foto_ktp_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/agenda';
            $request->file('foto_ktp')->move($Path, $File);

            $input['foto_ktp'] = $File;
        }
        Agenda::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('agenda-dan-kegiatan');
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
        $data['model'] = Agenda::find($id);
        return view('agenda.edit', $data);
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
        $model = Agenda::find($id);
        $input = $request->all();
        if($request->hasFile('foto_ktp')){
            $File = 'foto_ktp_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/agenda';
            $request->file('foto_ktp')->move($Path, $File);

            $input['foto_ktp'] = $File;
        }
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('agenda-dan-kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Agenda::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('agenda');
    }

    public function delete(Request $request)
    {
        $category = Agenda::find($request->id);
        $category->delete();

        return 'success';
    }
}
