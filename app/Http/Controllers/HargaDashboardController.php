<?php

namespace App\Http\Controllers;

use App\Models\harga;
use Illuminate\Http\Request;

class HargaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view ('dashboard.harga.index',[
        'hargas'=>Harga::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('dashboard.harga.create',[
            'hargas'=>Harga::all()
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
            'kategori'=>'required',
            'satuan'=>'required',
            'harga'=>'required'
            
        ]);
        Harga::create($validatedData);
        return redirect('/harga-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(harga $harga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit(harga $harga, $id)
    {
            return view('dashboard.harga.edit',[
             'hargas' =>Harga::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, harga $harga, $id)
    {
        {
        $validatedData=$request->validate([
            'kategori'=>'required',
            'satuan'=>'required',
            'harga'=>'required'
            
        ]);
        Harga::where('id',$id)->update($validatedData);
        return redirect('/harga-dashboard')->with('success','Data berhasil diubah');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy(harga $harga, $id)
    {
        Harga::destroy($id);
        return redirect('/harga-dashboard')->with('success','Data berhasil dihapus');
    }
}
