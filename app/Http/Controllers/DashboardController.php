<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;


class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();

        return view('diagnosa', compact('gejala'));
    }

    public function hasil(Request $request)
    {
        $pilih = $request->gejala;

        $aturan = Aturan::all();

        $hasilPenyakit = null;

        foreach ($aturan as $a) {

            if (in_array($a->kode_gejala, $pilih)) {

                $hasilPenyakit =
                    Penyakit::where(
                        'kode_penyakit',
                        $a->kode_penyakit
                    )->first();

                break;
            }
        }

        Hasil::create([
            'gejala' => json_encode($pilih),
            'hasil_penyakit' =>
                $hasilPenyakit->nama_penyakit ?? 'Tidak ditemukan'
        ]);

        return view('hasil', compact(
            'hasilPenyakit',
            'pilih'
        ));
    }
}