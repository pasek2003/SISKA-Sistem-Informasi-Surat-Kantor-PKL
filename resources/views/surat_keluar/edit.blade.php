@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Edit Surat Keluar</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-lg">

<form action="/surat-keluar/{{$data->id}}" method="POST">

@csrf
@method('PUT')

<input type="text" name="no_surat"
value="{{$data->no_surat}}"
class="w-full border rounded p-2 mb-3">

<input type="text" name="tujuan"
value="{{$data->tujuan}}"
class="w-full border rounded p-2 mb-3">

<input type="text" name="perihal"
value="{{$data->perihal}}"
class="w-full border rounded p-2 mb-3">

<input type="date" name="tanggal_surat"
value="{{$data->tanggal_surat}}"
class="w-full border rounded p-2 mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">

Update

</button>

</form>

</div>

@endsection