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
        $request->validate([
            'merk' => 'required',
            'stock' => 'required|numeric',
            'tersedia' => 'required|in:0,1',
        ]);

        // Check if the data already exists in the database
        $existingData = DB::table('vga')
            ->where('kodevga', $request->kode)
            ->first();

        if ($existingData) {
            // If the data exists, update the stock
            DB::table('vga')->where('kodevga', $request->kode)->update([
                'stockvga' => DB::raw('stockvga + ' . $request->stock),
            ]);

            return redirect('/vga')->with('success', 'Stock updated successfully.');
        } else {
            // If the data doesn't exist, insert a new entry
            DB::table('vga')->insert([
                'kodevga' => $request->kode,
                'merkvga' => $request->merk,
                'stockvga' => $request->stock,
                'tersedia' => $request->tersedia,
            ]);

            return redirect('/vga')->with('success', 'New entry added successfully.');
        }
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
        // Check if the data already exists in the database
        $existingData = DB::table('vga')
            ->where('kodevga', $request->id)
            ->first();

        // Check if the data is different from the existing data
        if ($existingData && $existingData->merkvga != $request->merk) {
            // If the data is different, update the record
            DB::table('vga')->where('kodevga', $request->id)->update([
                'merkvga' => $request->merk,
                'tersedia' => $request->tersedia,
                'stockvga' => $request->stock,
            ]);

            return redirect('/vga')->with('success', 'Record updated successfully.');
        } else {
            return redirect('/vga')->with('info', 'No changes made to the record.');
        }
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
