<!DOCTYPE html>
<html>

<head>

<title>Login SISKA</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-96">

<div class="p-6 flex items-center gap-4 border-b border-gray-700">

<img
src="{{ asset('logo/siska.png') }}"
class="w-12 h-12 object-contain">

<div>

<p class="text-xl font-bold leading-none">
SISKA
</p>

<p class="text-sm text-gray-400">
Sistem Informasi Surat
</p>

</div>

</div>

<form method="POST" action="/login">

@csrf

<input
type="email"
name="email"
placeholder="Email"
class="w-full border p-2 rounded mb-3">

<input
type="password"
name="password"
placeholder="Password"
class="w-full border p-2 rounded mb-4">

<button
class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">

Login

</button>

</form>

</div>

</body>
</html>