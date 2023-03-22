@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Добавить объект</h1>

        <form method="post" action="{{ route('building.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Город</label>
                <input name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: Уфа</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес</label>
                <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: ул. Айская, д. 1, к. 1, кв.(пом.)1</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Тип объекта</label>
                <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Например: Клуб</div>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            <a class="btn btn-primary" href="{{ route('building.index') }}" role="button">Назад</a>
        </form>

    </div>
@endsection
