@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

<h3>Data Nilai Mahasiswa</h3>

<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data Mahasiswa Baru</a>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach ($nilaikuliah as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>
                @if($n->NilaiAngka <= 40)
                D
                @elseif(41 <= $n->NilaiAngka && $n->NilaiAngka <=60)
                C
                @elseif(61 <= $n->NilaiAngka && $n->NilaiAngka <= 80)
                B
                @elseif($n->NilaiAngka >= 81)
                A
                @else
                Invalid
                @endif
            </td>
            <td>
                {{$n->NilaiAngka * $n->SKS}}
            </td>
        </tr>
    @endforeach
</table>

@endsection
