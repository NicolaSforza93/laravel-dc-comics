@extends('layouts.app')

@section('content')

<section class="py-5 position-relative">
    <div class="container">
        <h1 class="title text-uppercase">Current Series</h1>
        <div class="row row-gap-4">
            @forelse ($comic_books as $comic_book)
                <div class="col-2">
                    <div class="card h-100 position-relative"> 
                        <div class="delete position-absolute">
                            <form action="{{ route('comic_books.destroy', $comic_book->id) }}" method="POST">
    
                                @csrf
                            
                                @method('DELETE')
        
                                <button type="submit">
                                    <i class="fa-solid fa-circle-minus"></i>
                                </button>
                            </form>
                        </div>                   
                        <img src="{{ $comic_book->thumb }}" class="card-img-top" alt="">
                        <div class="card-body px-0">
                            <h6 class="text-uppercase text-black">
                                <a href="{{ route('comic_books.show', $comic_book->id) }}" class="text-white text-decoration-none">{{ $comic_book->series }}</a>
                            </h6>
                        </div>
                    </div>  
                </div>
            @empty
                <p>Nessun fumetto trovato</p>
            @endforelse
        </div>
        <button type="button" class="btn btn-primary mb-3"><a href="{{ route('comic_books.create') }}" class="text-white text-decoration-none">Aggiungi fumetto <i class="fa-solid fa-plus"></i></a></button>
    </div>
</section>

@endsection