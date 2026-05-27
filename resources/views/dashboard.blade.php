@extends('layouts.app')

@section('content')

<h1 class="text-5xl font-bold text-[#184d2d] mb-4">

    Selamat Datang

</h1>

<p class="text-2xl text-gray-600 mb-10">

    Sistem Pakar Diagnosa Penyakit Tanaman Cabai
    menggunakan metode Forward Chaining.

</p>

<!-- CARD STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-3xl shadow p-8">

        <h2 class="text-xl text-gray-500">
            Total Gejala
        </h2>

        <p class="text-5xl font-bold text-[#1D6B34] mt-4">

            {{ \App\Models\Gejala::count() }}

        </p>

    </div>

    <div class="bg-white rounded-3xl shadow p-8">

        <h2 class="text-xl text-gray-500">
            Total Penyakit
        </h2>

        <p class="text-5xl font-bold text-[#1D6B34] mt-4">

            {{ \App\Models\Penyakit::count() }}

        </p>

    </div>

    <div class="bg-white rounded-3xl shadow p-8">

        <h2 class="text-xl text-gray-500">
            Metode
        </h2>

        <p class="text-3xl font-bold text-[#1D6B34] mt-4">

            Forward Chaining

        </p>

    </div>

</div>

<!-- SECTION INFO -->
<div class="mt-14 grid grid-cols-1 gap-8 w-full">

    <!-- CARD 1 -->
    <div
        class="w-full
               bg-[#f7fff8]
               border border-[#dceedd]
               rounded-3xl
               shadow-lg
               p-10">

        <h2
            class="text-4xl font-bold
                   text-[#1D6B34]
                   mb-10">

            Mengapa Menggunakan Sistem Pakar? 🌱

        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div
                class="bg-[#eef8f0]
                       rounded-2xl
                       p-6">

                <div
                    class="bg-[#dff3e4]
                           w-14 h-14
                           rounded-2xl
                           flex items-center justify-center
                           text-[#1D6B34]
                           font-bold text-2xl mb-5">

                    1

                </div>

                <h3
                    class="text-2xl font-bold
                           text-[#184d2d]
                           mb-3">

                    Deteksi Dini

                </h3>

                <p
                    class="text-[#54715c]
                           leading-relaxed text-lg">

                    Identifikasi penyakit sebelum menyebar luas ke seluruh kebun.

                </p>

            </div>

            <div
                class="bg-[#eef8f0]
                       rounded-2xl
                       p-6">

                <div
                    class="bg-[#dff3e4]
                           w-14 h-14
                           rounded-2xl
                           flex items-center justify-center
                           text-[#1D6B34]
                           font-bold text-2xl mb-5">

                    2

                </div>

                <h3
                    class="text-2xl font-bold
                           text-[#184d2d]
                           mb-3">

                    Akurasi Tinggi

                </h3>

                <p
                    class="text-[#54715c]
                           leading-relaxed text-lg">

                    Menggunakan basis pengetahuan dari pakar pertanian.

                </p>

            </div>

            <div
                class="bg-[#eef8f0]
                       rounded-2xl
                       p-6">

                <div
                    class="bg-[#dff3e4]
                           w-14 h-14
                           rounded-2xl
                           flex items-center justify-center
                           text-[#1D6B34]
                           font-bold text-2xl mb-5">

                    3

                </div>

                <h3
                    class="text-2xl font-bold
                           text-[#184d2d]
                           mb-3">

                    Rekomendasi Penanganan

                </h3>

                <p
                    class="text-[#54715c]
                           leading-relaxed text-lg">

                    Dapatkan saran tindakan kuratif dan preventif secara langsung.

                </p>

            </div>

        </div>

    </div>

    <!-- CARD 2 -->
    <div
        class="w-full
               bg-[#f7fff8]
               border border-[#dceedd]
               rounded-3xl
               shadow-lg
               p-10">

        <h2
            class="text-4xl font-bold
                   text-[#1D6B34]
                   mb-8">

            Metode Forward Chaining ⚙️

        </h2>

        <p
            class="text-[#54715c]
                   text-xl mb-6">

            Bagaimana sistem mengambil keputusan

        </p>

        <div
            class="bg-[#eef8f0]
                   border border-[#dceedd]
                   rounded-2xl
                   p-8">

            <p
                class="text-[#40634a]
                       leading-[2]
                       text-lg">

                <span class="font-bold text-[#1D6B34]">

                    Forward Chaining

                </span>

                adalah metode inferensi yang dimulai dari gejala
                yang dipilih pengguna, kemudian sistem mencocokkannya
                dengan aturan pada basis pengetahuan hingga ditemukan
                penyakit yang paling sesuai.

                <br><br>

                Sistem akan menganalisis gejala tanaman cabai,
                menghitung kecocokan aturan,
                lalu memberikan hasil diagnosis beserta solusi
                penanganannya secara otomatis.

            </p>

        </div>

    </div>

</div>

@endsection