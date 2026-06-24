@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Edit Disposisi</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-lg">

<form action="/disposisi/{{$data->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-4">
<label>ID Surat Masuk</label>
<input type="text"
name="surat_masuk_id"
value="{{$data->surat_masuk_id}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Tujuan</label>
<input type="text"
name="tujuan"
value="{{$data->tujuan}}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Catatan</label>
<textarea
name="catatan"
class="w-full border rounded p-2">{{$data->catatan}}</textarea>
</div>

<button class="bg-blue-600 text-white px-4 py-2 rounded">

Update

</button>

</form>

</div>

@endsection