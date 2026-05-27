@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-green-800 mb-5">
    Tambah Gejala
</h1>

<form action="/gejala" method="POST"
      class="bg-white p-6 rounded-xl shadow space-y-4">

    @csrf

    <input type="text"
           name="kode_gejala"
           placeholder="Kode Gejala"
           class="w-full border p-3 rounded-lg">

    <input type="text"
           name="nama_gejala"
           placeholder="Nama Gejala"
           class="w-full border p-3 rounded-lg">

    <button class="bg-green-700 text-white px-5 py-2 rounded-lg">
        Simpan
    </button>

</form>

@endsection