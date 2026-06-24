@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Edit Surat Masuk</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-lg">

<form action="/surat-masuk/{{$data->id}}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-4">
<label>No Surat</label>
<input type="text" name="no_surat"
value="{{$data->no_surat}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Pengirim</label>
<input type="text" name="pengirim"
value="{{$data->pengirim}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Perihal</label>
<input type="text" name="perihal"
value="{{$data->perihal}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Tanggal Surat</label>
<input type="date" name="tanggal_surat"
value="{{$data->tanggal_surat}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Upload PDF Baru</label>

<input type="file" name="file_surat"
class="w-full border rounded p-2">

@if($data->file_surat)

<a href="{{ asset('surat/'.$data->file_surat) }}"
target="_blank"
class="text-blue-600 text-sm">

Lihat PDF Lama

</a>

@endif

</div>

<button class="bg-blue-600 text-white px-4 py-2 rounded">
Update
</button>

</form>

</div>

@endsection