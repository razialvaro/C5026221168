@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            @foreach($pegawai as $p)
    <fieldset disabled>
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="jabatan" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="umur" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat"required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
        </div>
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>


	</form>
    </fieldset>
    <a href="/pegawai"><input  type="submit" value="Oke" class="btn btn-primary"></a>
    </div>

</div>
	@endforeach

    @endsection
