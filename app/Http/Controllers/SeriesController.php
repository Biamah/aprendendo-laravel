<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::all();

        return view('serie.index', compact('series'));
    }

    public function create()
    {
        return view('serie.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = Serie::create($request->all());

        echo "Série com id {$serie->id} criada: {$serie->nome}";
    }
}
