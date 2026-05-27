@extends('layouts.app')

@section('content')

<div class="w-full">

    <h1 class="text-5xl font-bold text-[#1D6B34] mb-8">
        Konsultasi Diagnosa 🌱
    </h1>

    <form action="/diagnosa" method="POST" id="diagnosaForm">

        @csrf

        @php
            $kategori = $gejala->groupBy('kategori');
        @endphp

        @foreach($kategori as $nama => $items)

        <div class="w-full max-w-full overflow-hidden
                    bg-[#F7FAF7]
                    border border-[#DCEEDD]
                    rounded-3xl
                    shadow-lg
                    p-8
                    mb-10">

            <h2 class="text-3xl font-bold text-[#1D6B34] mb-6">

                Gejala {{ $nama }}

            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">

                @foreach($items as $g)

                <label class="w-full
                               bg-[#EEF5EF]
                               hover:bg-[#DCEEDD]
                               border border-[#DCEEDD]
                               rounded-2xl
                               p-6
                               flex items-start gap-4
                               cursor-pointer
                               transition-all duration-300">

                    <input type="checkbox"
                           name="gejala[]"
                           value="{{ $g->id }}"
                           class="mt-1 w-5 h-5 shrink-0">

                    <div class="min-w-0">

                        <p class="font-bold text-[#1D6B34]">

                            {{ $g->kode_gejala }}

                        </p>

                        <p class="text-[#245C3A] text-lg break-words">

                            {{ $g->nama_gejala }}

                        </p>

                    </div>

                </label>

                @endforeach

            </div>

        </div>

        @endforeach

        <button type="submit"
                id="submitBtn"
                class="bg-[#1D6B34]
                       hover:bg-[#245C3A]
                       text-white
                       px-8 py-4
                       rounded-2xl
                       font-semibold
                       text-lg">

            Diagnosa Sekarang

        </button>

    </form>

</div>

<script>
document.getElementById('diagnosaForm')
.addEventListener('submit', function() {

    const btn = document.getElementById('submitBtn');

    btn.disabled = true;

    btn.innerHTML = 'Memproses...';

});
</script>

@endsection