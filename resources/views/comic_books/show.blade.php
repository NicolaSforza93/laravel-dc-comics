@extends('layouts.app')

@section('content')

<section class="p-4">
    <div class="container">
        <h1 class="text-uppercase">{{ $comic_book->title }}</h1>
        <p>{{ $comic_book->description }}</p>
        <div class="row">
            <div class="col-6">
                <h4 class="mb-3">Specs</h4>
                <p class="border-bottom border-top mb-0 py-1"><strong>Series:</strong> {{ $comic_book->series }}</p>
                <p class="border-bottom mb-0 py-1"><strong>U.S. Price:</strong> ${{ $comic_book->price }}</p>
                <p class="border-bottom mb-0 py-1"><strong>On Sale Date:</strong> {{ $comic_book->sale_date }}</p>
            </div>
        </div>
    </div>
</section>
    
@endsection