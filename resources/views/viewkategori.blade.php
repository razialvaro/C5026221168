@extends('master2')
@section('judulhalaman', 'Detail Kategori Barang')

@section('konten')

    <h3>Anda telah memilih kategori dengan Kode: {{ $kategori->ID }}</h3>

    <a href="/kategori"> Kembali</a>

@endsection
