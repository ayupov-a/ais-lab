@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Добавить учатсника</h1>

        <form method="post" action="{{ route('member.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Имя</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: Иван Иванов</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Телефон</label>
                <input name="phone" type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">В формате: +7999123123</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Роль</label>
                <input name="role" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: Заказчик, Электрик</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Назначить работу</label>
                <select name="job_id" class="form-select" aria-label="Пример выбора по умолчанию">
                    @foreach($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            <a class="btn btn-primary" href="{{ route('member.index') }}" role="button">Назад</a>
        </form>

    </div>
@endsection
