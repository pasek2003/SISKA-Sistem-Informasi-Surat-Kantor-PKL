<!DOCTYPE html>
<html>

<head>

<title>SISKA</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<div class="flex">

<!-- Sidebar -->
<div class="w-64 bg-gray-900 text-white min-h-screen shadow-lg">

<!-- Logo -->
<div class="p-6 flex items-center gap-3 border-b border-gray-700">

<img
src="{{ asset('logo/siska.png') }}"
class="w-12 h-12 object-contain">

<div>

<p class="text-lg font-bold leading-none">
SISKA
</p>

<p class="text-xs text-gray-400">
Sistem Informasi Surat
</p>

</div>

</div>

<!-- Menu -->
<ul class="mt-2">

<li class="p-4 hover:bg-gray-800 transition">
<a href="/dashboard" class="block">Dashboard</a>
</li>

<li class="p-4 hover:bg-gray-800 transition">
<a href="/surat-masuk" class="block">Surat Masuk</a>
</li>

<li class="p-4 hover:bg-gray-800 transition">
<a href="/surat-keluar" class="block">Surat Keluar</a>
</li>

<li class="p-4 hover:bg-gray-800 transition">
<a href="/disposisi" class="block">Disposisi</a>
</li>

@auth
@if(auth()->user()->role == 'admin')

<li class="p-4 hover:bg-gray-800 transition">
<a href="/approve" class="block">Approval</a>
</li>

@endif
@endauth

<li class="p-4 hover:bg-red-600 transition">
<a href="/logout" class="block">Logout</a>
</li>

</ul>

</div>

<!-- Content -->
<div class="flex-1 p-10">

@yield('content')

</div>

</div>

</body>

</html>