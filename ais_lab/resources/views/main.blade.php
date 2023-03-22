@extends('layouts.app')
@section('content')
    <div class="container">
        @csrf
        <div class="row justify-content-center">
            <h1 class="text-center">Plan & Build</h1>

            <h2>Резюме</h2>
            <p>
                Веб-приложение систематизирует подачу заявок, постановку задач и оформление претензий по техобслуживанию объектов и помещений. Платформа позовляет установить связь с подрядчиками, клиентами и всеми заинтересованными лицами строительного процесса. Помогает отслеживать все этапы работы, оформлять отчетности по проделанной работе, управление активами и всеми ресурсами.
            </p>
            <h2>Команда</h2>
        </div>
            <ol class="list-group list-group-numbered w-25">
                <li class="list-group-item">Аюпов Айгиз</li>
                <li class="list-group-item">Понкратова Яна</li>
                <li class="list-group-item">Сабирова Алина</li>
            </ol>
        <div class="row justify-content-center">

        </div>
    </div>
@endsection
