<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Nilai;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view ('admin.siswa.index', ['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'email' => 'required'
        ]);

        Siswa::create([
            'nama'  =>$request->nama,
            'jenkel'  =>$request->jenkel,
            'alamat'  =>$request->alamat,
            'nohp'  =>$request->nohp,
            'jurusan'  =>$request->jurusan,
            'email'  =>$request->email,
        ]);

        return redirect('/siswa');
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
        $siswa = Siswa::find($id);
        return view ('admin.siswa.edit', ['siswa'=>$siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'email' => 'required'
        ]);
        // $siswa = Siswa::find($id);
        // $siswa->nama = $request->nama;
        // $siswa->jenkel = $request->jenkel;
        // $siswa->alamat = $request->alamat;
        // $siswa->nohp = $request->nohp;
        // $siswa->jurusan = $request->jurusan;
        // $siswa->email = $request->email;

        // $siswa->save();

        $siswa = siswa::find($id);
        $siswa->update($request->all());

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $siswa = siswa::where('nama','LIKE', '%' .$request ->search. '%')->get();
        }
        else {
            $siswa = siswa::all();
        }

        return view ('admin.siswa.index', ['siswa' => $siswa]);
    }

    public function Guru(){

        $guru = Guru::all();
        return view('admin.siswa.guru', ['guru'=>$guru]);
    }

    public function Mapel(){

        $mapel = mapel::all();
        return view('admin.siswa.mapel', ['mapel'=>$mapel]);
    }
}
