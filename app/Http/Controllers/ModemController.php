<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModemController extends Controller
{
    public function index()
    {
    	// mengambil data dari table modem
    	$modem = DB::table('modem')->paginate(10);

    	// mengirim data modem ke view index
    	return view('indexModem',['modem' => $modem]);

    }


    // method untuk menampilkan view form tambah modem
    public function tambah()
    {

	// memanggil view tambah
	    return view('tambahModem');

    }

// method untuk insert data ke table modem
    public function store(Request $request)
    {
        // insert data ke table modem
        DB::table('modem')->insert([
            'merk_modem' => $request->merk_modem,
            'stock_modem' => $request->stock_modem,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');

    }

    // method untuk edit data modem
    public function edit($id)
    {
        // mengambil data modem berdasarkan kode yang dipilih
        $modem = DB::table('modem')->where('kode_modem',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editModem',['modem' => $modem]);

    }

        // Method untuk mengupdate data tumbuhan
    public function update(Request $request)
    {
        DB::table('modem')->where('kode_modem', $request->id)->update([
            'merk_modem' => $request->merk_modem,
            'stock_modem' => $request->stock_modem,
            'tersedia' => $request->tersedia,
        ]);

        return redirect('/modem');
    }

    // Method untuk menghapus data tumbuhan
    public function hapus($id)
    {
        // Menghapus data tumbuhan berdasarkan id
        DB::table('modem')->where('kode_modem', $id)->delete();

        // Alihkan halaman ke halaman daftar tumbuhan
        return redirect('/modem');
    }

    // Method untuk mencari data tumbuhan
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel tumbuhan sesuai pencarian
        $modem = DB::table('modem')
        ->where('merk_modem', 'like', "%" . $cari . "%")
        ->paginate();

        // Mengirim data tumbuhan ke view 'mode'
        return view('indexModem', ['modem' => $modem]);
    }
}
