@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Data Surat Keluar</h1>

<a href="/surat-keluar/create"
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
Tambah Surat
</a>

<div class="bg-white shadow rounded-xl mt-4 overflow-x-auto">

<table class="w-full text-center">

<thead class="bg-gray-100">

<tr>

<th class="p-3 w-16">No</th>
<th>No Surat</th>
<th>Tujuan</th>
<th>Perihal</th>
<th>Tanggal</th>
<th class="w-40">Aksi</th>

</tr>

</thead>

<tbody>

@foreach($data as $d)

<tr class="border-b hover:bg-gray-50">

<td class="p-3">{{$loop->iteration}}</td>

<td>{{$d->no_surat}}</td>

<td>{{$d->tujuan}}</td>

<td>{{$d->perihal}}</td>

<td>{{$d->tanggal_surat}}</td>

<td>

<div class="flex justify-center gap-2">

<a href="/surat-keluar/{{$d->id}}/edit"
class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">

Edit

</a>

<form action="/surat-keluar/{{$d->id}}" method="POST">

@csrf
@method('DELETE')

<button
onclick="return confirm('Yakin ingin menghapus data?')"
class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">

Hapus

</button>

</form>

</div>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection