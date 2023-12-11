@extends('master2')
@section('judulhalaman','Data Mobil')

@section('konten')

<h3>Data Mobil</h3>

<a href="/mobil/tambah" class="btn btn-primary"> + Tambah MobilBaru</a>

<br />
<p>Cari Data Mobil :</p>
	<form action="/mobil/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Mobil"
        value="{{ old('cari', isset($cari)? $cari : '')}}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
<br />

<table class="table table-striped table-hover">
    <tr>
        <th>Kode</th>
        <th>Merk</th>
        <th>Stock</th>
        <th>Ketersediaan</th>
        <th>Opsi</th>
    </tr>
    @foreach ($mobil as $m)
        <tr>
            <td>{{ $m->kodemobil }}</td>
            <td>{{ $m->merkmobil }}</td>
            <td>{{ $m->stockmobil }}</td>
            <td>
                @if($m->tersedia == 1)
                Tersedia
                @elseif($m->tersedia == 0)
                Tidak Tersedia
                @else
                Invalid
                @endif
            </td>
            <td>
                <a href="/mobil/view/{{ $m->kodemobil }}" class="btn btn-success">View</a>
                |
                <a href="/mobil/edit/{{ $m->kodemobil }}" class="btn btn-warning">Edit</a>
                |
                <a href="/mobil/hapus/{{ $m->kodemobil }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
{{$mobil->links()}}
@endsection
