@extends('layouts.app')

@section('content')

<section class="py-5 position-relative">
    <div class="container">
        <h4 class="title-series text-uppercase p-2">Current Series</h4>
        <div class="d-flex flex-column">
            <div class="row row-gap-4">
                @forelse ($comic_books as $comic_book)
                    <div class="col-2">
                        <div class="card h-100 position-relative"> 
                            <div class="delete position-absolute">
                                <form action="{{ route('comic_books.destroy', $comic_book->id) }}" method="POST">
        
                                    @csrf
                                
                                    @method('DELETE')
            
                                    <button type="submit" onclick="return confirm('Sicuro di voler cancellare')">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                </form>
                            </div>                   
                            <img src="{{ $comic_book->thumb }}" class="object-fit-contain rounded" alt="">
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
            <button type="button" class="add-btn mb-3 align-self-center"><a href="{{ route('comic_books.create') }}" class="text-white text-decoration-none text-uppercase">Add Comic Book <i class="fa-solid fa-plus"></i></a></button>
        </div>
    </div>
</section>

@endsection