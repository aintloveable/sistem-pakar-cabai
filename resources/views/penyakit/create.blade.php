@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-green-800 mb-5">
    Tambah Penyakit
</h1>

<form action="/penyakit" method="POST"
      class="bg-white p-6 rounded-xl shadow space-y-4">

    @csrf

    <input type="text"
           name="kode_penyakit"
           placeholder="Kode Penyakit"
           class="w-full border p-3 rounded-lg">

    <input type="text"
           name="nama_penyakit"
           placeholder="Nama Penyakit"
           class="w-full border p-3 rounded-lg">

    <textarea
        name="solusi"
        placeholder="Solusi"
        class="w-full border p-3 rounded-lg"></textarea>

    <button class="bg-green-700 text-white px-5 py-2 rounded-lg">
        Simpan
    </button>

</form>

@endsection