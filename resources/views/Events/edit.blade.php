@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование события</div>

                    <div class="card-body">
                        <form method="POST" action="/events/{{ $event->id }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label  for="name">Название проекта:</label>
                                <input class="form-control" type="text" id="name" name="project_name" value="{{ $event->project_name }}" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label  for="name">Стоимость работ (Руб.):</label>
                                <input class="form-control" type="number" id="name" name="cost" value="{{ $event->cost }}" >
                            </div>

                            <div class="form-group">
                                <label  for="name">Тип работ:</label>
                                <input class="form-control" type="text" id="name" name="work_type" value="{{ $event->work_type }}" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label for="responsibleUser">Выберите ответственного сотрудника:</label>
                                <select class="form-control" id="responsibleUser" name="user_id">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}"   @if($user->id == $event->user_id) selected @endif >{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label  for="date">Дата события:</label>
                                <input class="form-control" type="date" id="date" name="event_date" value="{{$event->event_date}}" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label for="shift">Выберите смену:</label>
                                <select class="form-control" id="shift" name="shift_id">
                                    @foreach($shifts as $shift)
                                        <option value="{{ $shift->id }}"   @if($shift->id == $event->shift_id) selected @endif >{{ $shift->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                       Добавить
                                    </button>
                            </div>
                        </form>
                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="form-group btn-sm">
                                <button type="submit" class="btn btn-outline-danger">
                                    Удалить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
