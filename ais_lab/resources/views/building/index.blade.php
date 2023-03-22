@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Доступные объекты</h1>
        @include('alert')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Город</th>
                <th scope="col">Адрес</th>
                <th scope="col">Тип строения</th>
                <th scope="col">Действие</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($buildings as $building)
            <tr>
                <th>{{ $building->id }}</th>
                <form action="{{ route('building.update', $building) }}" method="post">
                    <td><input type="text" name="id" value="{{ $building->city }}"></td>
                    <td><input type="text" name="address" value="{{ $building->address }}"></td>
                    <td><input type="text" name="type" value="{{ $building->type }}"></td>
                    @csrf
                    @method('patch')
                    <td><input class="btn btn-primary" type="submit" value="Изменить"></td>
                </form>
                <form action="{{ route('building.delete', $building) }}" method="post">
                    @csrf
                    @method('delete')
                    <td><input class="btn btn-danger" type="submit" value="Удалить"></td>
                </form>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('building.create') }}" role="button">Добавить объект</a>
    </div>
@endsection
