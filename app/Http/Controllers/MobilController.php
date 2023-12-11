<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $mobil = DB::table('mobil')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('indexmobil',['mobil' => $mobil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmobil');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mobil')->insert([
			'kodemobil' => $request->kode,
			'merkmobil' => $request->merk,
			'stockmobil' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');

	}

	// method untuk edit data pegawai
	public function edit($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('kodemobil',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editmobil',['mobil' => $mobil]);

	}

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('mobil')->where('kodemobil', $request->kode)->update([
            'kodemobil' => $request->kode,
            'merkmobil' => $request->merk,
            'tersedia' => $request->tersedia,
            'stockmobil' => $request->stock
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/mobil');
    }


	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('kodemobil',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexmobil',['mobil' => $mobil, 'cari' => $cari]);

	}

    public function view($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('kodemobil',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewmobil',['mobil' => $mobil]);


	}
}
