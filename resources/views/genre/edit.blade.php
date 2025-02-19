@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="card-body">
                <h3 class="card-title text-center">Изменить жанр</h3>
                <form action="{{ route('genres.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name" class="form-label">Название</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            placeholder="Введите название"
                            value="{{ $genre->name }}"
                        >
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Изменить</button>
                        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Назад</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
