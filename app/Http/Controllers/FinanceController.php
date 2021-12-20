<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;
use App\Position;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finance = Finance::orderBy('created_at', 'asc')->get();

        return view('admin/dataKeuangan', compact('finance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $positions = Position::get();
        $finance = Finance::orderBy('created_at', 'asc')->get();
        return view('admin/inputPemasukan', compact('finance', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Finance::create([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'status' => $request->status
        ]);
        session()->flash('finance_store', 'Pemasukan berhasil ditambahkan.');
        return redirect('admin/keuangan/pemasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $keuangan = Finance::where('id', $id)->first();
        $finance = Finance::orderBy('created_at', 'asc')->get();
        return view('admin/showKeuangan', compact('keuangan', 'finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        Finance::where('id', $id)
            ->update([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);     
        session()->flash('finance_store', 'Pemasukan berhasil dirubah.');
        return redirect('admin/keuangan/pemasukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Finance::where('id', $id)->delete();

        session()->flash('deleted', 'Data keuangan berhasil dihapus.');
        return redirect('admin/keuangan/pemasukan');
    }
}
