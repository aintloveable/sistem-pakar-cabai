@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-5">

    <h1 class="text-3xl font-bold text-green-800">
        Data Gejala
    </h1>

    <a href="/gejala/create"
       class="bg-green-700 text-white px-4 py-2 rounded-lg">
       Tambah
    </a>

</div>

<div class="bg-white p-5 rounded-xl shadow">

<table class="w-full">

    <tr class="border-b">

        <th class="text-left p-3">Kode</th>
        <th class="text-left p-3">Nama Gejala</th>
        <th class="text-left p-3">Aksi</th>

    </tr>

    @foreach($gejala as $g)

    <tr class="border-b">

        <td class="p-3">{{ $g->kode_gejala }}</td>

        <td class="p-3">{{ $g->nama_gejala }}</td>

        <td class="p-3 flex gap-2">

            <a href="/gejala/{{ $g->id }}/edit"
               class="bg-yellow-400 px-3 py-1 rounded">
               Edit
            </a>

            <form action="/gejala/{{ $g->id }}" method="POST">

                @csrf
                @method('DELETE')

                <button class="bg-red-500 text-white px-3 py-1 rounded">
                    Hapus
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

</div>

@endsection