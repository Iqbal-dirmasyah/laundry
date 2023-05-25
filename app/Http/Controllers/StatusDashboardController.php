<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Order;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class StatusDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.status.index',[
        'statuses'=>Status::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.status.create',[
            'orders'=>Order::all(),
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
            'order_id'=>'required',
            'pembayaran_id'=>'required',
            'status'=>'required'
        ]);
        Status::create($validatedData);
        return redirect('/status-dashboard')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status, $id)
    {
        return view('dashboard.status.edit',[
            'statuses'=>Status::find($id),
            'orders'=>Order::all(),
            'pembayarans'=>Pembayaran::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status, $id)
    {
        $validatedData=$request->validate([
            'order_id'=>'required',
            'pembayaran_id'=>'required',
            'status'=>'required'
        ]);
        Status::where('id',$id)->update($validatedData);
        return redirect('/status-dashboard')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status, $id)
    {
        Status::destroy($id);
        return redirect('/status-dashboard')->with('success','Data berhasil dihapus');
    }
}
