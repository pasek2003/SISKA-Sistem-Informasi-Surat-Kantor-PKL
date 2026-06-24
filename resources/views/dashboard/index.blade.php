@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-3 gap-6">

<div class="bg-white shadow p-6 rounded-xl">
<h2 class="text-gray-500">Surat Masuk</h2>
<p class="text-3xl font-bold">{{$masuk}}</p>
</div>

<div class="bg-white shadow p-6 rounded-xl">
<h2 class="text-gray-500">Surat Keluar</h2>
<p class="text-3xl font-bold">{{$keluar}}</p>
</div>

<div class="bg-white shadow p-6 rounded-xl">
<h2 class="text-gray-500">Disposisi</h2>
<p class="text-3xl font-bold">{{$disposisi}}</p>
</div>

</div>

@endsection