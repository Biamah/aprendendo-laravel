<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('serie.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('serie.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Série {$serie->id} criada com sucesso {$serie->nome}"
            );

        return redirect('/series');
    }
}
