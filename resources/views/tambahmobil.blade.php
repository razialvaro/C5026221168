
@extends('master2')
@section('judulhalaman','Data Mobil')

@section('konten')

	<h3>Data Mobil</h3>

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

<div class="row">

<div class="col-8">
	<form action="/mobil/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tersedia" name="tersedia" placeholder="Ketik 1 Jika Tersedia dan 0 Jika Tidak">
            </div>
        </div>



        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection
