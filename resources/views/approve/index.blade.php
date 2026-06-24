@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Approval Surat</h1>

<div class="bg-white shadow rounded-xl">

<table class="w-full text-center">

<thead class="bg-gray-100">

<tr>
<th>No</th>
<th>No Surat</th>
<th>Pengirim</th>
<th>Perihal</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

@foreach($data as $d)

<tr class="border-b">

<td>{{$loop->iteration}}</td>
<td>{{$d->no_surat}}</td>
<td>{{$d->pengirim}}</td>
<td>{{$d->perihal}}</td>

<td>

<a href="/approve/{{$d->id}}"
class="bg-green-600 text-white px-3 py-1 rounded">

Approve

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection