@extends('layouts.app')

@section('content')

<section class="p-4">

    {{-- @dump($comic_book) --}}

    <div class="container">
        <form action="{{ route('comic_books.update', $comic_book->id) }}" method="POST" class="border border-4 border-primary rounded p-3 bg-white w-50 m-auto">
            
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-medium">Titolo</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ old('title', $comic_book->title) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-medium">Descrizione</label>
                <textarea class="form-control" name="description" aria-label="With textarea">{{ old('description', $comic_book->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-medium">URL Immagine</label>
                <input type="text" class="form-control" name="thumb" id="basic-url" aria-describedby="basic-addon3 basic-addon4" value="{{ old('thumb', $comic_book->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-medium">Prezzo</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" value="{{ old('price', $comic_book->price) }}">
                </div>
            </div>
              
            <div class="mb-3">
                <label for="basic-url" class="form-label fw-medium">Serie</label>
                <input type="text" class="form-control" name="series" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ old('series', $comic_book->series) }}">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-medium">Data Uscita</label>
                <input type="date" class="form-control" name="sale_date" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ old('sale_date', $comic_book->sale_date) }}">
            </div>

            <div class="mb-3">
                <select class="form-select" name="type" id="type" aria-label="Default select example">
                    <option>Tipologia</option>
                    <option @selected(old('type', $comic_book->type) === 'comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type', $comic_book->type) === 'graphic novel') value="graphic novel">Graphic Novel</option>
                  </select>
            </div> 
            
            <button type="submit" class="btn btn-primary">Edit</button>
              
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</section>
    
@endsection