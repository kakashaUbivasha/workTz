@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $book->id }}. {{ $book->title }}</h3>

                <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('images/default.png') }}"
                     class="img-fluid rounded shadow-sm mb-3"
                     alt="Обложка книги"
                     style="max-width: 300px; height: 400px; object-fit: cover;">

                <h4 class="mt-3">Жанры</h4>
                <ul class="list-group list-group-flush mb-3">
                    @foreach($book->genres as $genre)
                        <li class="list-group-item">{{ $genre->name }}</li>
                    @endforeach
                </ul>

                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Изменить</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>

                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection
