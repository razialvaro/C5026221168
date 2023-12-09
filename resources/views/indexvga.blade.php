@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

<h3>Data VGA</h3>

<a href="/vga/tambah" class="btn btn-primary"> + Tambah VGA Baru</a>

<br />
<p>Cari Data VGA :</p>
	<form action="/vga/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari VGA"
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
    @foreach ($vga as $v)
        <tr>
            <td>{{ $v->kodevga }}</td>
            <td>{{ $v->merkvga }}</td>
            <td>{{ $v->stockvga }}</td>
            <td>
                @if($v->tersedia == 1)
                Tersedia
                @elseif($v->tersedia == 0)
                Tidak Tersedia
                @else
                Invalid
                @endif
            </td>
            <td>
                <a href="/vga/view/{{ $v->kodevga }}" class="btn btn-success">View</a>
                |
                <a href="/vga/edit/{{ $v->kodevga }}" class="btn btn-warning">Edit</a>
                |
                <a href="/vga/hapus/{{ $v->kodevga }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
{{$vga->links()}}
@endsection
