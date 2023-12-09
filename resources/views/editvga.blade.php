@extends('master2')
@section('judulhalaman','Data VGA')

@section('konten')

	<h3>Edit VGA</h3>

	<a href="/vga"> Kembali</a>

	<br/>
	<br/>

	@foreach($vga as $v)
	<form action="/vga/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $v->kodevga }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-1 col-form-label">Merk</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $v->merkvga }}" class="form-control" id="merk" name="merk">
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-1 col-form-label">Stock</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $v->stockvga }}" class="form-control" id="stock" name="stock">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-1 col-form-label">Ketersediaan</label>
            <div class="col-5">
                <input type="text" required="required" value="{{ $v->tersedia }}" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
