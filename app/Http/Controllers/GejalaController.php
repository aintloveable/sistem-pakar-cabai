<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();

        return view('gejala.index', compact('gejala'));
    }

    public function create()
    {
        return view('gejala.create');
    }

    public function store(Request $request)
    {
        Gejala::create($request->all());

        return redirect('/gejala');
    }

    public function edit($id)
    {
        $gejala = Gejala::find($id);

        return view('gejala.edit', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $gejala = Gejala::find($id);

        $gejala->update($request->all());

        return redirect('/gejala');
    }

    public function destroy($id)
    {
        Gejala::destroy($id);

        return redirect('/gejala');
    }
}