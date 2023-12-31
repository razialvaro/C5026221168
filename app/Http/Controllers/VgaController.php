<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VgaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $vga = DB::table('vga')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('indexvga',['vga' => $vga]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahvga');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('vga')->insert([
			'kodevga' => $request->kode,
			'merkvga' => $request->merk,
			'stockvga' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/vga');

	}

	// method untuk edit data pegawai
	public function edit($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$vga = DB::table('vga')->where('kodevga',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editvga',['vga' => $vga]);

	}

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('vga')->where('kodevga', $request->kode)->update([
            'kodevga' => $request->kode,
            'merkvga' => $request->merk,
            'tersedia' => $request->tersedia,
            'stockvga' => $request->stock
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/vga');
    }


	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('vga')->where('kodevga',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/vga');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$vga = DB::table('vga')
		->where('merkvga','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexvga',['vga' => $vga, 'cari' => $cari]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$vga = DB::table('vga')->where('kodevga',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view',['vga' => $vga]);


	}
}
