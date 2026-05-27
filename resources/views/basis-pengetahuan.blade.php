@extends('layouts.app')

@section('content')

<h1 class="text-5xl font-bold text-[#184d2d] mb-8">

    Basis Pengetahuan 🌿

</h1>

<!-- PENJELASAN -->
<div
    class="bg-[#f7fff8]
           border border-[#dceedd]
           rounded-[30px]
           shadow-lg
           p-8 mb-10">

    <h2
        class="text-3xl font-bold
               text-[#1D6B34]
               mb-5">

        Basis Pengetahuan

    </h2>

    <p
        class="text-[#54715c]
               text-lg leading-relaxed">

        Kumpulan aturan IF-THEN yang digunakan oleh
        mesin inferensi Forward Chaining untuk
        mendeteksi penyakit tanaman cabai.

    </p>

</div>

<!-- FORWARD CHAINING -->
<div
    class="bg-[#f7fff8]
           border border-[#dceedd]
           rounded-[30px]
           shadow-lg
           p-8 mb-10">

    <h2
        class="text-3xl font-bold
               text-[#1D6B34]
               mb-5">

        Cara Kerja Forward Chaining

    </h2>

    <p
        class="text-[#54715c]
               text-lg leading-relaxed mb-8">

        Forward Chaining adalah metode inferensi
        yang dimulai dari fakta yang diketahui
        (gejala yang dipilih pengguna),
        kemudian menelusuri aturan yang berlaku
        untuk mencapai kesimpulan
        (diagnosa penyakit).

    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- STEP 1 -->
        <div
            class="bg-white
                   border border-[#dceedd]
                   rounded-3xl
                   p-6 text-center">

            <div
                class="w-14 h-14
                       rounded-2xl
                       bg-[#dff3e4]
                       flex items-center justify-center
                       mx-auto mb-4
                       text-2xl">

                📝

            </div>

            <h3
                class="text-xl font-bold
                       text-[#1D6B34]
                       mb-3">

                1. Input Fakta

            </h3>

            <p class="text-[#54715c]">

                Pengguna memilih gejala yang
                diamati pada tanaman.

            </p>

        </div>

        <!-- STEP 2 -->
        <div
            class="bg-white
                   border border-[#dceedd]
                   rounded-3xl
                   p-6 text-center">

            <div
                class="w-14 h-14
                       rounded-2xl
                       bg-[#dff3e4]
                       flex items-center justify-center
                       mx-auto mb-4
                       text-2xl">

                🔍

            </div>

            <h3
                class="text-xl font-bold
                       text-[#1D6B34]
                       mb-3">

                2. Pencocokan Aturan

            </h3>

            <p class="text-[#54715c]">

                Mesin mencocokkan gejala
                dengan kondisi IF
                pada setiap aturan.

            </p>

        </div>

        <!-- STEP 3 -->
        <div
            class="bg-white
                   border border-[#dceedd]
                   rounded-3xl
                   p-6 text-center">

            <div
                class="w-14 h-14
                       rounded-2xl
                       bg-[#dff3e4]
                       flex items-center justify-center
                       mx-auto mb-4
                       text-2xl">

                🌶️

            </div>

            <h3
                class="text-xl font-bold
                       text-[#1D6B34]
                       mb-3">

                3. Kesimpulan

            </h3>

            <p class="text-[#54715c]">

                Aturan yang terpenuhi
                menghasilkan diagnosa penyakit.

            </p>

        </div>

    </div>

</div>

<!-- DAFTAR ATURAN -->
<h2
    class="text-4xl font-bold
           text-[#184d2d]
           mb-8">

    Daftar Aturan (6 Aturan)

</h2>

<div class="space-y-8">

    @foreach($aturan as $a)

    <div
        class="bg-[#f7fff8]
               border border-[#dceedd]
               rounded-[30px]
               shadow-lg
               overflow-hidden">

        <!-- HEADER -->
        <div
            class="flex justify-between items-center
                   px-8 py-6
                   border-b border-[#dceedd]">

            <div class="flex items-center gap-4">

                <div
                    class="bg-[#dff3e4]
                           text-[#1D6B34]
                           px-4 py-2
                           rounded-xl
                           font-bold">

                    R0{{ $loop->iteration }}

                </div>

                <h2
                    class="text-2xl font-bold
                           text-[#1D6B34]">

                    {{ $a->penyakit->nama_penyakit ?? 'Penyakit Tidak Ditemukan' }}

                </h2>

            </div>

            <div
                class="bg-[#dff3e4]
                       text-[#1D6B34]
                       px-5 py-2
                       rounded-2xl
                       font-semibold">

                Min. {{ $a->minimal_gejala }} Gejala

            </div>

        </div>

        <!-- BODY -->
        <div class="p-8">

            <!-- IF -->
            <h3
                class="text-xl font-bold
                       text-[#1D6B34]
                       mb-5">

                IF (Jika)

            </h3>

            <div class="space-y-4">

                @php
                    $ids = explode(',', $a->gejala_ids);
                @endphp

                @foreach($ids as $id)

                    @php
                        $g = \App\Models\Gejala::where('kode_gejala', trim($id))->first();
                    @endphp

                    @if($g)

                    <div
                        class="bg-white
                               border border-[#dceedd]
                               rounded-2xl
                               px-5 py-4
                               flex items-center gap-4">

                        <div
                            class="bg-[#dff3e4]
                                   text-[#1D6B34]
                                   px-3 py-2
                                   rounded-xl
                                   font-bold">

                            {{ $g->kode_gejala }}

                        </div>

                        <p
                            class="text-[#40634a]
                                   text-lg">

                            {{ $g->nama_gejala }}

                        </p>

                    </div>

                    @endif

                @endforeach

            </div>

            <div
                class="mt-5
                       bg-[#eef8f0]
                       border border-[#dceedd]
                       rounded-2xl
                       p-4">

                <p
                    class="text-[#54715c]
                           italic">

                    Minimal {{ $a->minimal_gejala }}
                    gejala harus terpenuhi
                    agar aturan dapat dijalankan.

                </p>

            </div>

            <!-- THEN -->
            <div class="mt-8">

                <h3
                    class="text-xl font-bold
                           text-[#1D6B34]
                           mb-4">

                    THEN (Maka)

                </h3>

                <div
                    class="bg-[#dff3e4]
                           border border-[#cce7d1]
                           rounded-2xl
                           p-5">

                    <p
                        class="text-[#184d2d]
                               text-lg leading-relaxed">

                        Tanaman cabai terindikasi
                        terserang

                        <span class="font-bold">

                            {{ $a->penyakit->nama_penyakit ?? 'Penyakit Tidak Ditemukan' }}

                        </span>

                    </p>

                </div>

            </div>

        </div>

    </div>

    @endforeach

</div>

@endsection