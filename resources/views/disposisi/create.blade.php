@extends('layouts.app')

@section('content')

<div class="max-w-2xl">

<h1 class="text-2xl font-bold mb-6">Tambah Disposisi</h1>

<div class="bg-white p-6 rounded-xl shadow">

<form action="/disposisi" method="POST">
@csrf

<div class="mb-4">
<label class="block text-gray-600 mb-2">ID Surat Masuk</label>
<input
type="number"
name="surat_masuk_id"
class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
placeholder="Masukkan ID surat masuk">
</div>

<div class="mb-4">
<label class="block text-gray-600 mb-2">Tujuan Disposisi</label>
<input
type="text"
name="tujuan"
class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
placeholder="Masukkan tujuan disposisi">
</div>

<div class="mb-6">
<label class="block text-gray-600 mb-2">Catatan</label>
<textarea
name="catatan"
class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
rows="4"
placeholder="Tambahkan catatan disposisi"></textarea>
</div>

<div class="flex gap-3">

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
Simpan
</button>

<a href="/disposisi"
class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
Batal
</a>

</div>

</form>

</div>

</div>

@endsection