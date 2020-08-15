@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Личная информация:</div>

                <div class="card-body">
                    Ваше имя: {{ Auth::user()->name }}
                    <br>
                    Ваш Email: {{Auth::user()->email}}
                    <br>
                    Ваша компания: {{  Auth::user()->company->name  }}
                </div>
                <div class=" btn-sm">
                    <a class="btn btn-primary" href="user/edit/{{ auth()->id() }}">Редактировать</a>
                </div>
                <hr>
                <div class=" btn-sm">
                    <a class="btn btn-outline-success" href="events">Управления событиями</a>
                </div>
                <hr>
                <div class=" btn-sm">
                    <a class="btn btn-outline-success" href="shifts">Управление сменами</a>
                </div>
                <hr>
                <div class=" btn-sm">
                    <a class="btn btn-outline-success" href="companies">Управление компаниями</a>
                </div>
                <hr>
                <div class="btn-lg">
                    <a class="btn btn-outline-primary" href="calendar/{{Auth::user()->company->id}}">Смотреть календарь</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
