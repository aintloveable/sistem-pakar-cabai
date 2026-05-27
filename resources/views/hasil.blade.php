@extends('layouts.app')

@section('content')

<h1 class="text-5xl font-bold text-[#184d2d] mb-8">

    Hasil Diagnosa 🌱

</h1>

<div
    class="bg-[#f7fff8]
           border border-[#dceedd]
           rounded-3xl
           shadow-xl
           p-8">

    <h2
        class="text-3xl font-bold
               text-[#1D6B34]
               mb-5">

        {{ $penyakit->nama_penyakit ?? 'Tidak ditemukan' }}

    </h2>

    <p
        class="text-[#40634a]
               text-lg
               leading-relaxed
               mb-6">

        {{ $penyakit->solusi ?? '-' }}

    </p>

    <div
        class="bg-[#dff3e4]
               border border-[#cde8d2]
               p-5
               rounded-2xl">

        <h3
            class="font-bold
                   text-[#1D6B34]
                   text-lg
                   mb-4">

            Gejala Dipilih

        </h3>

        <ul class="space-y-3">

            @foreach($pilihan as $p)

            <li
                class="bg-[#f7fff8]
                       text-[#184d2d]
                       px-4 py-3
                       rounded-xl
                       shadow-sm">

                • {{ $p }}

            </li>

            @endforeach

        </ul>

    </div>

</div>

@endsection