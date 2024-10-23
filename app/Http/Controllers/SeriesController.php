<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name', 'asc')->get();
        $successMessage = session('success.message');

        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
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

        $serie = Serie::create($request->all());

        return to_route('series.index')->with('success.message', "Serie {$serie->name} added successfully");
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        
        return to_route('series.index')->with('success.message', "Serie {$series->name} removed successfully");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('success.message', "Serie {$series->name} updated successfully");
    }
}