<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::all();

        return view('penyakit.index', compact('penyakit'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        Penyakit::create($request->all());

        return redirect('/penyakit');
    }

    public function edit($id)
    {
        $penyakit = Penyakit::find($id);

        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id)
    {
        $penyakit = Penyakit::find($id);

        $penyakit->update($request->all());

        return redirect('/penyakit');
    }

    public function destroy($id)
    {
        Penyakit::destroy($id);

        return redirect('/penyakit');
    }
}