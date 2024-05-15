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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ComicModel $comicModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComicModel $comicModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComicModel $comicModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComicModel $comicModel)
    {
        //
    }
}
