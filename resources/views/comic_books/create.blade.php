@extends('layouts.app')

@section('content')

<section class="section-create py-4">
    <div class="container">
        <figure class="position-relative mb-0">

            <img src="{{ Vite::asset('resources/img/16884_1.jpg') }}" alt="" class="overlay img-fluid">
        
            <form action="{{ route('comic_books.store') }}" method="POST" class="w-50 position-absolute top-50 start-50 translate-middle">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-uppercase text-white">Title</label>
                    <input type="text" class="form-control border border-0" name="title" id="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label text-uppercase text-white">description</label>
                    <textarea class="form-control border border-0" name="description" aria-label="With textarea">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label text-uppercase text-white">URL Image</label>
                    <input type="text" class="form-control border border-0" name="thumb" id="basic-url" aria-describedby="basic-addon3 basic-addon4" value="{{ old('thumb') }}">
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label text-uppercase text-white">Price</label>
                    <div class="input-group">
                        <span class="input-group-text border-end">$</span>
                        <input type="text" class="form-control border-start" name="price" aria-label="Amount (to the nearest dollar)" value="{{ old('price') }}">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="basic-url" class="form-label text-uppercase text-white">Series</label>
                    <input type="text" class="form-control border border-0" name="series" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ old('series') }}">
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label text-uppercase text-white">Sale Date</label>
                    <input type="date" class="form-control border border-0" placeholder="Data" name="sale_date" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ old('sale_date') }}">
                </div>

                <div class="mb-3">
                    <select class="form-select border border-3 border-dark" name="type" aria-label="Default select example">
                        <option>Tipologia</option>
                        <option @selected(old('type') === 'comic book') value="comic book">Comic Book</option>
                        <option @selected(old('type') === 'graphic novel') value="graphic novel">Graphic Novel</option>
                    </select>
                </div> 
                
                <button type="submit" class="btn btn-primary">Add</button>
                
            </form>
        </figure>

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