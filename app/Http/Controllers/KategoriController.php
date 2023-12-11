<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $kategori = DB::table('kategori')->get();

    	// mengirim data pegawai ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}

	// method untuk menampilkan view form tambah pegawai

    public function hasil(Request $request)
    {
        // Mendapatkan ID yang dipilih dari form
        $selectedID = $request->input('kategori');

        // Mengambil data kategori berdasarkan ID yang dipilih
        $kategori = DB::table('kategori')->where('ID', $selectedID)->first();

        // Menampilkan view hasilkategori.blade.php dengan data kategori yang dipilih
        return view('viewkategori', ['kategori' => $kategori]);
    }

}
