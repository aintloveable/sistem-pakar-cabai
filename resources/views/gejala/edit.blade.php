@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-green-800 mb-5">
    Edit Gejala
</h1>

<form action="/gejala/{{ $gejala->id }}" method="POST"
      class="bg-white p-6 rounded-xl shadow space-y-4">

    @csrf
    @method('PUT')

    <input type="text"
           name="kode_gejala"
           value="{{ $gejala->kode_gejala }}"
           class="w-full border p-3 rounded-lg">

    <input type="text"
           name="nama_gejala"
           value="{{ $gejala->nama_gejala }}"
           class="w-full border p-3 rounded-lg">

    <button class="bg-green-700 text-white px-5 py-2 rounded-lg">
        Update
    </button>

</form>

@endsection