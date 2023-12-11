@extends('master2')
@section('judulhalaman','Data Mobil')

@section('konten')



	<h3>View Mobil</h3>

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            @foreach($mobil as $m)
    <fieldset disabled>
	<form action="/mobil/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" required="required" name="merk" value="{{ $m->merkmobil }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number"  class="form-control" id="jabatan" required="required" name="stock" value="{{ $m->stockmobil }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="umur" required="required" name="tersedia" value="{{ $m->tersedia }}">
            </div>
        </div>

		<input type="hidden" name="kode" value="{{ $m->kodemobil }}"> <br/>


	</form>
    </fieldset>
    <a href="/mobil"><input  type="submit" value="Oke" class="btn btn-primary"></a>
    </div>

</div>
	@endforeach

    @endsection
