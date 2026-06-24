@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Data Surat Masuk</h1>

<a href="/surat-masuk/create"
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
Tambah Surat
</a>

<div class="bg-white shadow rounded-xl mt-4 overflow-x-auto">

<table class="w-full text-center">

<thead class="bg-gray-100">

<tr>

<th class="p-3 w-16">No</th>
<th>No Surat</th>
<th>Pengirim</th>
<th>Perihal</th>
<th>Tanggal</th>
<th>File Surat</th>
<th class="w-40">Aksi</th>
<th>Status</th>

</tr>

</thead>

<tbody>

@foreach($data as $d)

<tr class="border-b hover:bg-gray-50">

<td class="p-3">{{$loop->iteration}}</td>

<td>{{$d->no_surat}}</td>

<td>{{$d->pengirim}}</td>

<td>{{$d->perihal}}</td>

<td>{{$d->tanggal_surat}}</td>

<td>

@if($d->file_surat)

<a href="{{ asset('surat/'.$d->file_surat) }}"
target="_blank"
class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm">

View PDF

</a>

@else

<span class="text-gray-400">Belum Upload</span>

@endif

</td>

<td>

<div class="flex justify-center gap-2">

<a href="/surat-masuk/{{$d->id}}/edit"
class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">

Edit

</a>

<form action="/surat-masuk/{{$d->id}}" method="POST">

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

<td>

@if($d->status=='approved')

<span class="bg-green-600 text-white px-2 py-1 rounded text-sm">
Approved
</span>

@else

<span class="bg-yellow-500 text-white px-2 py-1 rounded text-sm">
Pending
</span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection