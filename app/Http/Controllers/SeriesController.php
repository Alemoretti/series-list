<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name', 'asc')->get();

        return view('series.index')->with('series', $series);
    }

    public function create () 
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $serie = new Serie();
        $serie->name = $request->input('name');
        $serie->save();
        
        return redirect('/series');
    }
}