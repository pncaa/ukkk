<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $dataTransaksi = Transaksi::all();
        $status = $request->status;
        return view('transaksi.datatransaksi', compact('dataTransaksi'));
    }
    public function tambahtransaksi()
    {
        return view('transaksi.tambahtransaksi');
    }
    public function inserttransaksi(Request $request)
    {
        $berat = $request->berat;
        $hargapaket = ['gold' => 15, 'silver' => 10, 'bronze' => 5];

        $totalbayar = $berat * $hargapaket[$request->paket];

        DB::table('transaksis')->insert([
            'namacustomer' => $request->namapelanggan,
            'jenislaundry' => $request->jenislaundry,
            'paket' => $request->paket,
            'berat' => $request->berat,
            'status' => 'proses',
            'totalbayar' => $totalbayar,
            'outlet' => $request->outlet,

        ]);
        return redirect('transaksi');
    }
    public function tampiltransaksi($id)
    {
        $dataTransaksi = Transaksi::find($id);
        return view('transaksi.tampiltransaksi', compact('dataTransaksi'));
    }
    public function updatetransaksi(Request $request, $id)
    {
        $berat = $request->berat;
        $hargapaket = ['gold' => 15, 'silver' => 10, 'bronze' => 5];

        $totalbayar = $berat * $hargapaket[$request->paket];

        DB::table('transaksis')->where('id', $request->id)->update([
            'namacustomer' => $request->namapelanggan,
            'jenislaundry' => $request->jenislaundry,
            'paket' => $request->paket,
            'berat' => $request->berat,
            'status' => $request->status,
            'totalbayar' => $totalbayar,
            'outlet' => $request->outlet,

        ]);
        return redirect('transaksi');
    }
    public function hapustransaksi($id)
    {
        $dataTransaksi = Transaksi::find($id);
        $dataTransaksi->delete();
        return redirect('transaksi');
    }

    public function nota(Request $request){
        $dataTransaksi = Transaksi::find($request->id);
        view()->share('transaksi.datatransaksi', $dataTransaksi);
        $data['transaksi'] = $dataTransaksi;
        $pdf = PDF::loadview('tampilan.notapdf', $data);
        return $pdf->stream('nota.pdf');
    }
}
