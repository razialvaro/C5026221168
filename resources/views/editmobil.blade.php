@extends('master2')
@section('judulhalaman','Data Mobil')

@section('konten')

	<h3>Edit Mobil</h3>

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $m)
	<form action="/mobil/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $m->kodemobil }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-1 col-form-label">Merk</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $m->merkmobil }}" class="form-control" id="merk" name="merk">
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-1 col-form-label">Stock</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $m->stockmobil }}" class="form-control" id="stock" name="stock">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-1 col-form-label">Ketersediaan</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $m->tersedia }}" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
