@extends('layouts.app')

@section('content')

<section class="p-4">
    <div class="container">
        <form action="{{ route('comic_books.store') }}" method="POST" class="border rounded p-3">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Titolo">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">URL Immagine</label>
                <input type="text" class="form-control" name="thumb" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Prezzo</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
              
            <div class="mb-3">
                <label for="basic-url" class="form-label">Serie</label>
                <input type="text" class="form-control" placeholder="Serie" name="series" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Data Uscita</label>
                <input type="text" class="form-control" placeholder="Data" name="sale_date" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tipologia</option>
                    <option value="1">Comic Book</option>
                    <option value="2">Graphic Novel</option>
                  </select>
            </div> 
            
            <button type="submit" class="btn btn-primary">Aggiungi</button>
              
        </form>
    </div>
</section>
    
@endsection