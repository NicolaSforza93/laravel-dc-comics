@extends('layouts.app')

@section('content')

<section class="p-4">
    <h1 class="text-uppercase">{{ $comic_book->title }}</h1>
    <p>{{ $comic_book->description }}</p>
    <div>
        <h4>Specs</h4>
        <p><strong>Series:</strong> {{ $comic_book->series }}</p>
        <p><strong>U.S. Price:</strong> ${{ $comic_book->price }}</p>
        <p><strong>On Sale Date:</strong> {{ $comic_book->sale_date }}</p>
    </div>
</section>
    
@endsection