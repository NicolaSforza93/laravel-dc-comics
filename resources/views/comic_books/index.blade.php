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
                            <div class="modal fade" id="modal-{{$comic_book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h6>Vuoi davvero eliminare {{$comic_book->title}}?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{route('comic_books.destroy', $comic_book->id)}}" method="POST">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <button type="button" class="btn-delete position-absolute" data-bs-toggle="modal" data-bs-target="#modal-{{$comic_book->id}}">
                                <i class="fa-solid fa-circle-minus"></i>
                            </button>                  
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
            <button type="button" class="add-btn mb-3 align-self-center"><a href="{{ route('comic_books.create') }}" class="text-white text-decoration-none text-uppercase">Add Comic Book</a></button>
        </div>
    </div>
</section>

@endsection