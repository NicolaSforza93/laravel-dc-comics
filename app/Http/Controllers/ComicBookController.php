<?php

namespace App\Http\Controllers;

use App\Models\ComicBook;
use App\Http\Requests\StoreComicBookRequest;
use App\Http\Requests\UpdateComicBookRequest;
use Illuminate\Http\Request;

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
        return view('comic_books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // $new_comic_book = new ComicBook();

        // $new_comic_book->title = $data['title'];
        // $new_comic_book->description = $data['description'];
        // $new_comic_book->thumb = $data['thumb'];
        // $new_comic_book->price = $data['price'];
        // $new_comic_book->series = $data['series'];
        // $new_comic_book->sale_date = $data['sale_date'];
        // $new_comic_book->type = $data['type'];

        // $new_comic_book->save();

        $new_comic_book = ComicBook::create($data);

        return redirect()->route('comic_books.index', $new_comic_book->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(ComicBook $comic_book)
    {
        return view('comic_books.show', compact('comic_book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComicBook $comic_book)
    {
        return view('comic_books.edit', compact('comic_book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComicBook $comic_book)
    {
        $data = $request->all();
        $comic_book->update($data);

        return redirect()->route('comic_books.show', $comic_book->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComicBook $comicBook)
    {
        //
    }
}
