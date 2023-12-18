@extends('layouts.app')

@section('content')

<section class="p-4">
    <div class="container">
        <div class="row row-gap-4">
            @forelse ($comic_books as $comic_book)
                <div class="col-2">
                    <div class="card h-100">
                        <img src="{{ $comic_book->thumb }}" class="card-img-top" alt="">
                        <div class="card-body px-0">
                            <h6 class="text-uppercase text-black">
                                <a href="{{ route('comic_books.show', $comic_book) }}">{{ $comic_book->title }}</a>
                            </h6>
                        </div>
                    </div>  
                </div>
            @empty
                <p>Nessun fumetto trovato</p>
            @endforelse
        </div>
    </div>
</section>

@endsection