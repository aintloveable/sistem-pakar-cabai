@extends('layouts.app')

@section('content')

<h1 class="text-5xl font-bold text-[#184d2d] mb-8">

    Riwayat Konsultasi 🌱

</h1>

<div class="space-y-6">

    @forelse($riwayat as $r)

    <div
        class="bg-[#f7fff8]
               border border-[#dceedd]
               rounded-[28px]
               shadow-md hover:shadow-xl
               hover:-translate-y-1
               transition-all duration-300
               overflow-hidden">

        <!-- HEADER -->
        <div
            class="flex justify-between items-center
                   px-7 py-5
                   border-b border-[#dceedd]">

            <div>

                <h2
                    class="text-2xl font-bold text-[#1D6B34]
                           flex items-center gap-2">

                    🌿 {{ $r->hasil_penyakit }}

                </h2>

                <p class="text-sm text-[#6c8a72] mt-1">

                    Hasil diagnosa sistem pakar cabai

                </p>

            </div>

            <form
                action="/riwayat/{{ $r->id }}"
                method="POST">

                @csrf
                @method('DELETE')

                <button
                    onclick="return confirm('Hapus riwayat ini?')"
                    class="bg-[#d9534f]
                           hover:bg-[#c9302c]
                           active:scale-95
                           text-white font-medium
                           px-5 py-2.5
                           rounded-2xl
                           shadow-md
                           transition-all duration-300">

                    🗑 Hapus

                </button>

            </form>

        </div>

        <!-- BODY -->
        <div class="p-7">

            <p
                class="text-[#184d2d]
                       font-semibold mb-4 text-lg">

                Gejala yang dipilih:

            </p>

            <div class="flex flex-wrap gap-3">

                @foreach(json_decode($r->gejala) as $g)

                <span
                    class="bg-[#dff3e4]
                           text-[#1D6B34]
                           px-4 py-2
                           rounded-2xl
                           text-sm font-medium
                           hover:scale-105
                           transition">

                    {{ $g }}

                </span>

                @endforeach

            </div>

            <!-- FOOTER -->
            <div
                class="mt-6 pt-5
                       border-t border-[#dceedd]
                       flex items-center justify-between">

                <p class="text-sm text-[#6c8a72]">

                    🕒 {{ $r->created_at }}

                </p>

                <div
                    class="bg-[#dff3e4]
                           text-[#1D6B34]
                           px-4 py-2 rounded-xl text-sm font-semibold">

                    Diagnosa Selesai

                </div>

            </div>

        </div>

    </div>

    @empty

    <div
        class="bg-[#f7fff8]
               rounded-[28px]
               shadow-lg
               border border-[#dceedd]
               p-14
               text-center">

        <div class="text-7xl mb-5">

            🌱

        </div>

        <h2
            class="text-3xl font-bold
                   text-[#1D6B34] mb-3">

            Belum Ada Riwayat

        </h2>

        <p class="text-[#6c8a72] text-lg">

            Hasil konsultasi diagnosa akan muncul di sini

        </p>

    </div>

    @endforelse

</div>

@endsection