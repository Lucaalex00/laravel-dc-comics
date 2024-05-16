<?php

namespace App\Http\Controllers;

use App\Models\ComicModel;
use Illuminate\Http\Request;

class ComicModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = ComicModel::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $data
        ComicModel::create($data); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*  $data = $request->all(); */

        $val_data = $request->validate([
            'title' => 'required|min:3|max:200',
            'thumb' => 'nullable|max:50',
            'price' => 'required|max:255',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:20',
            'type' => 'nullable|max:50',
        ]);

        dd($val_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(ComicModel $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComicModel $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComicModel $comic)
    {
        $comic->update($request->all());
        return to_route('show', $comic); // REDIRECT TO SHOW PAGE
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComicModel $comic)
    {
        $comic->delete();
        return to_route('comics.index'); //REDIRECT TO INDEX PAGE
    }
}
