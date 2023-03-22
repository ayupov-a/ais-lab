@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Работы</h1>
        <table class="table">
        @include('alert')
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Описание</th>
                <th scope="col">ID объекта</th>
                <th scope="col">Описание</th>
                <th scope="col">Действие</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <th>{{ $job->id }}</th>
                    <form action="{{ route('job.update', $job) }}" method="post">
                        @csrf
                        @method('patch')
                        <td><input type="text" name="title" value="{{ $job->title }}"></td>
                        <td>
                            <label>
                                <select name="building_id" class="form-select">
                                    @foreach($buildings as $building)
                                        <option value="{{ $building->id }}"
                                                {{ $building->id == $job->building_id? 'selected': '' }}
                                        >{{ $building->id }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </td>
                        <td><textarea name="description" class="form-control">{{ $job->description }}</textarea></td>
{{--                        <td><input name="description" type="text" value="{{ $job->description }}"></td>--}}
                        <td><input class="btn btn-primary" type="submit" value="Изменить"></td>
                    </form>
                    <form action="{{ route('job.delete', $job) }}" method="post">
                        @csrf
                        @method('delete')
                        <td><input class="btn btn-danger" type="submit" value="Удалить"></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('job.create') }}" role="button">Добавить задание</a>
    </div>
@endsection
