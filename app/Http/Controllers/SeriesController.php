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

        Serie::create($request->all());
        
        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->series);

        return to_route('series.index');
    }
}