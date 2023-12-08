
@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h3>Tambah Data Mahasiswa</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

<div class="row">

<div class="col-8">
	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_angka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nilai_angka" name="nilai_angka">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>




        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection
