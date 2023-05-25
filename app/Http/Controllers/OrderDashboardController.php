<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class OrderDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view ('dashboard.order.index',[
        'orders'=>Order::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.order.create',[
            'pelanggans'=>Pelanggan::all(),
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
            'pelanggan_id'=>'required',
            'barang'=>'required',
            'satuan'=>'required',
            'no_order'=>'required',
            'pembayaran_id'=>'required'
        ]);
        Order::create($validatedData);
        return redirect('/order-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, $id)
    {
        return view('dashboard.order.edit',[
            'orders'=>Order::find($id),
            'pelanggans'=>Pelanggan::all(),
            'pembayarans'=>Pembayaran::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order, $id)
    {
        $validatedData=$request->validate([
            'pelanggan_id'=>'required',
            'barang'=>'required',
            'satuan'=>'required',
            'no_order'=>'required',
            'pembayaran_id'=>'required'
        ]);
        Order::where('id',$id)->update($validatedData);
        return redirect('/order-dashboard')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, $id)
    {
        Order::destroy($id);
        return redirect('/order-dashboard')->with('success','Data berhasil dihapus');
    }
}
