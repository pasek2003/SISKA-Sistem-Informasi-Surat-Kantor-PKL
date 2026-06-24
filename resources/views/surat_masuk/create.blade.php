@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Tambah Surat Masuk</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-lg">

<form action="/surat-masuk" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-4">
<label class="block mb-1">No Surat</label>
<input type="text" name="no_surat"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label class="block mb-1">Pengirim</label>
<input type="text" name="pengirim"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label class="block mb-1">Perihal</label>
<input type="text" name="perihal"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label class="block mb-1">Tanggal Surat</label>
<input type="date" name="tanggal_surat"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label class="block mb-1">Upload Surat (PDF)</label>

<input type="file"
name="file_surat"
accept="application/pdf"
class="w-full border rounded p-2 bg-gray-50">

<p class="text-sm text-gray-400 mt-1">
Format file: PDF
</p>

</div>

<div class="flex gap-3">

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
Simpan
</button>

<a href="/surat-masuk"
class="bg-gray-400 text-white px-4 py-2 rounded">
Batal
</a>

</div>

</form>

</div>

@endsection