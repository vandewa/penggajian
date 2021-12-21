<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;
use App\Position;
use Carbon\Carbon;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finance = Finance::paginate(50);

        $first = Carbon::parse(Finance::latest('id')->first()->datetime)->format('Y-m-d');
        $last = Carbon::parse(Finance::latest('id')->first()->datetime)->format('Y-m-d');
        $max = Carbon::parse(Finance::latest('id')->first()->datetime)->format('Y-m-d');
        $finances = Finance::where('created_at', '>=', $max)->get();


        if (session()->has('first')) {
            $first = session()->get('first');
            $last = session()->get('last');
            $finances = Finance::where('created_at', '<', Carbon::parse($last)->addDay())->where('created_at', '>=', $first)->get();
        }
        

        return view('admin/dataKeuangan', compact('finance', 'first', 'last', 'max', 'finances'));
    }

    public function indexSearch(Request $request)
    {
        $first = $request->tanggalAwal;
        $last = $request->tanggal;
        $max = Carbon::parse(Finance::latest('id')->first()->datetime)->format('Y-m-d');
        $finances = Finance::where('created_at', '<', Carbon::parse($last)->addDay())->where('created_at', '>=', $first)->get();
      
        return view('admin/dataKeuangan', compact('first', 'last', 'max', 'finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $positions = Position::get();
        $finance = Finance::where('status', 0)->
        orderBy('created_at', 'asc')->get();
        return view('admin/inputPemasukan', compact('finance', 'positions'));
    }

    public function createPengeluaran()
    {   $positions = Position::get();
        $finance = Finance::where('status', 1)->
        orderBy('created_at', 'asc')->get();
        return view('admin/inputPengeluaran', compact('finance', 'positions'));
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

    public function storePengeluaran(Request $request)
    {

        Finance::create([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'status' => $request->status
        ]);

        session()->flash('finance_store', 'Pengeluaran berhasil ditambahkan.');
        return redirect('admin/keuangan/pengeluaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $a = Finance::where('id', $id)->first();
        if($a->status == 0){
            $keuangan = Finance::where('id', $id)->first();
            $finance = Finance::where('status', 0)->orderBy('created_at', 'asc')->get();
            return view('admin/showPemasukan', compact('keuangan', 'finance'));
        } else {
            $keuangan = Finance::where('id', $id)->first();
            $finance = Finance::where('status', 1)->orderBy('created_at', 'asc')->get();
            return view('admin/showPengeluaran', compact('keuangan', 'finance'));
        }
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
        $a = Finance::where('id', $id)->first();
        if($a->status == 0){
            Finance::where('id', $id)
            ->update([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);    
            session()->flash('finance_store', 'Data pemasukan berhasil dirubah.');
            return redirect('admin/keuangan/pemasukan');
        } else {
            Finance::where('id', $id)
            ->update([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);    
            session()->flash('finance_store', 'Data pengeluaran berhasil dirubah.');
            return redirect('admin/keuangan/pengeluaran');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Finance::where('id', $id)->first();
        if($a->status == 0){
            Finance::where('id', $id)->delete();

            session()->flash('deleted', 'Data pemasukan berhasil dihapus.');
            return redirect('admin/keuangan/pemasukan');
        } else {
            Finance::where('id', $id)->delete();

            session()->flash('deleted', 'Data pengeluaran berhasil dihapus.');
            return redirect('admin/keuangan/pengeluaran');
        }
        
    }
}
