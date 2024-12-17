<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller{

    public function index()
    {
    	// mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->get();
    	// mengirim data karyawan ke view index
    	return view('indexKaryawan',['karyawan' => $karyawan]);

    }
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahKaryawan');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');

    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    
}
