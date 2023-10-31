<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Nilai;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = nilai::all();
        return view ('admin.nilai.index', ['nilais'=>$nilai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel = Mapel::all();
        $siswa = siswa::all();
        return view ('admin.nilai.create',compact('mapel','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required'
        ]);

        Nilai::create([
            'siswa_id'  =>$request->siswa_id,
            'mapel_id'  =>$request->mapel_id,
            'nilai'  =>$request->nilai
        ]);

        return redirect('/nilai');
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
        $nilais = Nilai::findOrFail($id)->load(['siswa','mapel']);
        $mapel = Mapel::all();
        $siswa = Siswa::all();
        return view ('admin.nilai.edit', compact('nilais','siswa','mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'nilai' => 'required'
        ]);

        $nilai = nilai::find($id);
        $nilai->update($request->all());

        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $nilai = nilai::where('siswa_id','LIKE', '%' .$request ->search. '%')->get();
        }
        else {
            $nilai = nilai::all();
        }
        

        return view ('admin.nilai.index', ['nilais' => $nilai]);
    }

    public function siswa(){

        $siswa = siswa::all();
        return view('admin.siswa.index', ['siswa'=>$siswa]);
    }

    public function Mapel(){

        $mapel = mapel::all();
        return view('admin.siswa.mapel', ['mapel'=>$mapel]);
    }

    public function Nilai(){

        $nilai = nilai::all();
        return view('admin.nilai.index', compact('siswa_id','mapel_id'));
    }
}
