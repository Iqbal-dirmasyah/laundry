<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.pelanggan.index',[
        'pelanggans'=>Pelanggan::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.pelanggan.create',[
            'pelanggans'=>Pelanggan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'kd_pelanggan'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required'
            
        ]);
        Pelanggan::create($validatedData);
        return redirect('/pelanggan-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan, $id)
    {
        return view('dashboard.pelanggan.edit',[
             'pelanggans' =>Pelanggan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan,$id)
    {
        $validatedData=$request->validate([
            'kd_pelanggan'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required'
            
        ]);
        Pelanggan::where('id',$id)->update($validatedData);
        return redirect('/pelanggan-dashboard')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan, $id)
    {
        Pelanggan::destroy($id);
        return redirect('/pelanggan-dashboard')->with('success','Data berhasil dihapus');
    }
}
