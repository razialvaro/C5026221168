
@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

<div class="row">

    <div class="form-group row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
    </div>

<div class="col-8">
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                </div>
        </div>




        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection
