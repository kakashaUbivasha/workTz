@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <h2 class="text-center">Список книг</h2>
            <a href="{{route('books.create')}}">Добавить книгу</a>
        </div>
    </div>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('images/default.png') }}"
                         class="card-img-top" alt="Обложка книги" style="height: 250px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$book->title}}</h5>
                        <a class="btn btn-outline-primary mt-auto" href="{{route('books.show', $book->id)}}">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>
@endsection
