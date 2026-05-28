<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sistem Pakar Cabai</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

           <script src="https://unpkg.com/lucide@latest"></script>

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#eef5ef;
        }

    </style>

</head>

<body>

<div class="flex min-h-screen">

    <!-- SIDEBAR -->

    <aside class="w-72 bg-[#1D6B34] text-white p-7">

        <h1 class="text-4xl font-bold leading-tight mb-12">

            Sistem Pakar
            <br>
            Diagnosa Penyakit
            <br>
            Tanaman Cabai

        </h1>

        <nav class="space-y-3 text-lg">

            <a href="/dashboard"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Dashboard

            </a>

            <a href="/gejala"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Gejala

            </a>

            <a href="/penyakit"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Penyakit

            </a>

            <a href="/diagnosa"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Konsultasi / Diagnosa

            </a>

            <a href="/basis-pengetahuan"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Basis Pengetahuan

            </a>

            <a href="/riwayat"
               class="block hover:bg-green-800 px-4 py-3 rounded-xl transition">

                Riwayat Konsultasi

            </a>

        </nav>

    </aside>

    <!-- CONTENT -->

    <main class="flex-1 p-10 overflow-x-hidden">

        @yield('content')

    </main>

</div>

</body>
</html>