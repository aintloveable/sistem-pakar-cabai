@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-4xl font-bold text-green-800">
        Data Penyakit
    </h1>

    <a href="/penyakit/create"
       class="bg-green-700 hover:bg-green-800 text-white px-5 py-3 rounded-xl shadow">
        + Tambah Penyakit
    </a>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-green-100">

            <tr>

                <th class="p-4 text-left">Kode</th>
                <th class="p-4 text-left">Nama Penyakit</th>
                <th class="p-4 text-left">Solusi</th>
                <th class="p-4 text-center">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($penyakit as $p)

            <tr class="border-t hover:bg-green-50 transition">

                <td class="p-4">
                    {{ $p->kode_penyakit }}
                </td>

                <td class="p-4 font-medium">
                    {{ $p->nama_penyakit }}
                </td>

                <td class="p-4 text-gray-700">
                    {{ $p->solusi }}
                </td>

                <td class="p-4">

                    <div class="flex justify-center gap-2">

                        <a href="/penyakit/{{ $p->id }}/edit"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg">
                            Edit
                        </a>

                        <form action="/penyakit/{{ $p->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="4"
                    class="text-center p-8 text-gray-500">

                    Belum ada data penyakit 🌱

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection