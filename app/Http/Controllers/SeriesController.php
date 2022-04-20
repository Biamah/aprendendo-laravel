<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Greys Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        return view('serie.index', compact('series'));
    }

    public function create()
    {
        return view('serie.create');
    }
}
