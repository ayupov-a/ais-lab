@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Создать задание</h1>

        <form method="post" action="{{ route('job.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: Шпаклевка</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Назначить работу</label>
                <select name="job_id" class="form-select" aria-label="Пример выбора по умолчанию">
                    @foreach($buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            <a class="btn btn-primary" href="{{ route('job.index') }}" role="button">Назад</a>
        </form>

    </div>
@endsection
