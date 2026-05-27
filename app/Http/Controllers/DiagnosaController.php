<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;
use App\Models\Hasil;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();

        return view(
            'diagnosa',
            compact('gejala')
        );
    }

    public function hasil(Request $request)
    {
        $pilihan = $request->gejala ?? [];

        $aturan = Aturan::all();

        $hasilTerbaik = null;

        $skorTerbesar = 0;

        foreach ($aturan as $a) {

            $gejalaRule = explode(',', $a->gejala_ids);

            $cocok = count(
                array_intersect(
                    $pilihan,
                    $gejalaRule
                )
            );

            if (
                $cocok >= $a->minimal_gejala
                &&
                $cocok > $skorTerbesar
            ) {

                $skorTerbesar = $cocok;

                $hasilTerbaik = Penyakit::find(
                    $a->penyakit_id
                );
            }
        }

        $namaGejala = Gejala::whereIn(
            'id',
            $pilihan
        )->pluck('nama_gejala');

        Hasil::create([

            'gejala' => json_encode($namaGejala),

            'hasil_penyakit' =>
                optional($hasilTerbaik)->nama_penyakit
                ?? 'Tidak ditemukan'

        ]);

        return view(
            'hasil',
            [
                'penyakit' => $hasilTerbaik,
                'pilihan' => $namaGejala,
                'skor' => $skorTerbesar
            ]
        );
    }
}