<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index',['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required'
        ]);

        Guru::create([
            'nama'  =>$request->nama,
            'nip'  =>$request->nip
        ]);

        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::find($id);
        return view ('admin.guru.edit', ['guru'=>$guru]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required'
        ]);

        $guru = guru::find($id);
        $guru->update($request->all());

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = guru::find($id);
        $guru->delete($id);

        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $guru = guru::where('nama','LIKE', '%' .$request ->search. '%')->get();
        }
        else {
            $guru = guru::all();
        }

        return view ('admin.guru.index', ['guru' => $guru]);
    }
    public function Mapel(){

        $mapel = Mapel::with('guru')->get();
        // dd($mapel[0]->guru->nama);
        return view('admin.guru.mapel', ['mapels'=>$mapel]);
    }
}
