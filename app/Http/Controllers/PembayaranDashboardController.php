<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view ('dashboard.pembayaran.index',[
        'pembayarans'=>Pembayaran::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('dashboard.pembayaran.create',[
            'pembayarans'=>Pembayaran::all()
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
            'metode'=>'required',
            'ket'=>'required'
            
        ]);
        Pembayaran::create($validatedData);
        return redirect('/pembayaran-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran, $id)
    {
            return view('dashboard.pembayaran.edit',[
             'pembayarans' =>Pembayaran::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran, $id)
    {
        {
        $validatedData=$request->validate([
            'metode'=>'required',
            'ket'=>'required'
            
        ]);
        pembayaran::where('id',$id)->update($validatedData);
        return redirect('/pembayaran-dashboard')->with('success','Data berhasil diubah');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran, $id)
    {
        pembayaran::destroy($id);
        return redirect('/pembayaran-dashboard')->with('success','Data berhasil dihapus');
    }
}
