@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Tambah Surat Keluar</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-lg">

<form action="/surat-keluar" method="POST">

@csrf

<input type="text" name="no_surat"
placeholder="No Surat"
class="w-full border rounded p-2 mb-3">

<input type="text" name="tujuan"
placeholder="Tujuan"
class="w-full border rounded p-2 mb-3">

<input type="text" name="perihal"
placeholder="Perihal"
class="w-full border rounded p-2 mb-3">

<input type="date" name="tanggal_surat"
class="w-full border rounded p-2 mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">

Simpan

</button>

</form>

</div>

@endsection