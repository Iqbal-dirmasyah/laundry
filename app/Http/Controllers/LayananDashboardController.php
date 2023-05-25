<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view ('dashboard.layanan.index',[
        'layanans'=>Layanan::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('dashboard.layanan.create',[
            'layanans'=>Layanan::all()
        ]);
    }
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
            'fasilitas'=>'required',
            'ket'=>'required',
            
        ]);
        Layanan::create($validatedData);
        return redirect('/layanan-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan, $id)
    {
            return view('dashboard.layanan.edit',[
             'layanans' =>Layanan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layanan $layanan, $id)
    {
        {
        $validatedData=$request->validate([
            'fasilitas'=>'required',
            'ket'=>'required'
            
        ]);
        Layanan::where('id',$id)->update($validatedData);
        return redirect('/layanan-dashboard')->with('success','Data berhasil diubah');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan, $id)
    {
        Layanan::destroy($id);
        return redirect('/layanan-dashboard')->with('success','Data berhasil dihapus');
    }
}
