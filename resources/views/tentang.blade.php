<!-- gunakan template master --> 
@extends('master') 
<!-- Bagian Judul --> 
<!-- jika isi bagian / section sedikit, dapat ditulis seperti ini --> 
@section('judul', 'Halaman Tentang') 
<!-- isi konten --> 
<!-- jika isi section panjang, maka penulisan dilakukan seperti ini --> 
@section('konten') 
<p>Hallo, selamat belajar laravel</p> 
@endsection