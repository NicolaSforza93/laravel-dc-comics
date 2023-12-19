@extends('layouts.app')

@section('content')

<section class="show-comic-book py-4 bg-white position-relative">
    <div class="container py-5">
        <a href="{{ route('comic_books.edit', $comic_book->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
        <figure class="position-absolute">
            <img src="{{ $comic_book->thumb }}" width="120" alt="">
        </figure>
        <h1 class="text-uppercase">{{ $comic_book->title }}</h1>
        <p>{{ $comic_book->description }}</p>
    </div>
    <div class="container-fluid bg-secondary-subtle py-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="mb-3">Specs</h4>
                    <p class="border-bottom border-top border-secondary-subtle mb-0 py-1"><strong>Series:</strong> {{ $comic_book->series }}</p>
                    <p class="border-bottom border-secondary-subtle mb-0 py-1"><strong>U.S. Price:</strong> ${{ $comic_book->price }}</p>
                    <p class="border-bottom border-secondary-subtle mb-0 py-1"><strong>On Sale Date:</strong> {{ $comic_book->sale_date }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection