@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Участники работ</h1>
        <table class="table">
        @include('alert')
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">Должность</th>
                <th scope="col">Процесс</th>
                <th scope="col">Действие</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($members as $member)
                <tr>
                    <th>{{ $member->id }}</th>
                    <form action="{{ route('member.update', $member) }}" method="post">
                        @csrf
                        @method('patch')
                        <td><input type="text" name="name" value="{{ $member->name }}"></td>
                        <td><input type="text" name="phone" value="{{ $member->phone }}"></td>
                        <td><input type="text" name="role" value="{{ $member->role }}"></td>
                        <td>
                            <select name="job_id" class="form-select">
                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}"
                                    {{ $job->id == $member->job_id? 'selected': '' }}
                                    >{{ $job->title }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input class="btn btn-primary" type="submit" value="Изменить"></td>
                    </form>
                    <form action="{{ route('member.delete', $member) }}" method="post">
                        @csrf
                        @method('delete')
                        <td><input class="btn btn-danger" type="submit" value="Удалить"></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('member.create') }}" role="button">Добавить участника</a>
    </div>
@endsection
