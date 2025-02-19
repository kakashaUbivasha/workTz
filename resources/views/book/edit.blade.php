@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="card-body">
                <h3 class="card-title text-center">Редактировать пост</h3>

                <form action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="title" class="form-label">Название</label>
                        <input type="text" class="form-control" value="{{ $book->title }}" name="title" id="title" placeholder="Введите название">
                    </div>
                    <div class="mb-3">
                        <label for="genres" class="form-label">Жанры</label>
                        <select id="genres" class="form-select" multiple name="genres[]">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}"
                                @foreach($book->genres as $bookGenre)
                                    {{ $genre->id === $bookGenre->id ? 'selected' : '' }}
                                    @endforeach
                                >
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Обложка книги</label>


                            <div class="mb-2">
                                <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('images/default.png') }}"
                                     alt="Текущая обложка"
                                     class="img-thumbnail"
                                     style="max-width: 200px;">
                            </div>


                        <input
                            type="file"
                            class="form-control @error('cover') is-invalid @enderror"
                            name="cover"
                            id="cover"
                            accept="image/*"
                        >
                        @error('cover')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-secondary">Назад</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
