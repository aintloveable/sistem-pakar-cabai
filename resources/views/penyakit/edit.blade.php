@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-green-800 mb-5">
    Edit Penyakit
</h1>

<form action="/penyakit/{{ $penyakit->id }}"
      method="POST"
      class="bg-white p-6 rounded-xl shadow space-y-4">

    @csrf
    @method('PUT')

    <input type="text"
           name="kode_penyakit"
           value="{{ $penyakit->kode_penyakit }}"
           class="w-full border p-3 rounded-lg">

    <input type="text"
           name="nama_penyakit"
           value="{{ $penyakit->nama_penyakit }}"
           class="w-full border p-3 rounded-lg">

    <textarea
        name="solusi"
        class="w-full border p-3 rounded-lg">{{ $penyakit->solusi }}</textarea>

    <button class="bg-green-700 text-white px-5 py-2 rounded-lg">
        Update
    </button>

</form>

@endsection