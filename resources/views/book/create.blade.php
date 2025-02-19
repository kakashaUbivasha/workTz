@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="card-body">
                <h3 class="card-title text-center">Создать новую книгу</h3>

                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название</label>
                        <input
                            type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title"
                            id="title"
                            placeholder="Введите название"
                            value="{{ old('title') }}"
                        >
                        @error('title')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="genres" class="form-label">Жанры</label>
                        <select id="genres" class="form-select" multiple name="genres[]">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Обложка книги</label>
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
                        <button type="submit" class="btn btn-success">Создать</button>
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">Назад</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
