@extends('layouts.app')

@section('content')

<section class="section-create p-4">
    <div class="container">
        <form action="{{ route('comic_books.store') }}" method="POST" class="p-3 w-50 m-auto">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase bg-white p-1 rounded">Title</label>
                <input type="text" class="form-control border border-3 border-dark" name="title" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase bg-white p-1 rounded">description</label>
                <textarea class="form-control border border-3 border-dark" name="description" aria-label="With textarea"></textarea>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-bold text-uppercase bg-white p-1 rounded">URL Image</label>
                <input type="text" class="form-control border border-3 border-dark" name="thumb" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-bold text-uppercase bg-white p-1 rounded">Price</label>
                <div class="input-group">
                    <span class="input-group-text border border-3 border-dark">$</span>
                    <input type="text" class="form-control border border-3 border-dark border-start-0" name="price" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
              
            <div class="mb-3">
                <label for="basic-url" class="form-label fw-bold text-uppercase bg-white p-1 rounded">Series</label>
                <input type="text" class="form-control border border-3 border-dark" name="series" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label fw-bold text-uppercase bg-white p-1 rounded">Sale Date</label>
                <input type="date" class="form-control border border-3 border-dark" placeholder="Data" name="sale_date" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="mb-3">
                <select class="form-select border border-3 border-dark" name="type" aria-label="Default select example">
                    <option selected>Tipologia</option>
                    <option value="1">Comic Book</option>
                    <option value="2">Graphic Novel</option>
                  </select>
            </div> 
            
            <button type="submit" class="btn btn-primary">Add</button>
              
        </form>
    </div>
</section>
    
@endsection