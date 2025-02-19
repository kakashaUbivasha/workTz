@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Список жанров</h2>
            <a href="{{route('genres.create')}}" class="btn btn-primary">Создать жанр</a>
        </div>

        <div class="row">
            @foreach($genres as $genre)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between ">
                            <h5 class="card-title">{{ $genre->name }}</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning">Изменить</a>
                                <form action="{{ route('genres.destroy', $genre->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6zM8 9h8v10H8zm7.5-5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
