<?php

namespace App\Http\Controllers;

use App\Models\ComicBook;
use App\Http\Requests\StoreComicBookRequest;
use App\Http\Requests\UpdateComicBookRequest;

class ComicBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comic_books = ComicBook::all();
        return view('comic_books.index', compact('comic_books'));
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
    public function store(StoreComicBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ComicBook $comicBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComicBook $comicBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicBookRequest $request, ComicBook $comicBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComicBook $comicBook)
    {
        //
    }
}
