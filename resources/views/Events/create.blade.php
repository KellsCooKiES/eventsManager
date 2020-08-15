@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавление события</div>

                    <div class="card-body">
                        <form method="POST" action="/events/store">
                            @csrf

                            <div class="form-group">
                                <label  for="name">Название проекта:</label>
                                <input class="form-control" type="text" id="name" name="project_name" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label  for="name">Стоимость работ (Руб.):</label>
                                <input class="form-control" type="number" id="name" name="cost" >
                            </div>

                            <div class="form-group">
                                <label  for="name">Тип работ:</label>
                                <input class="form-control" type="text" id="name" name="work_type" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label for="responsibleUser">Выберите ответственного сотрудника:</label>
                                <select class="form-control" id="responsibleUser" name="user_id">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}" >{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label  for="date">Дата события:</label>
                                <input class="form-control" type="date" id="date" name="event_date" placeholder="Введите название события">
                            </div>
                            <div class="form-group">
                                <label for="shift">Выберите смену:</label>
                                <select class="form-control" id="shift" name="shift_id">
                                    @foreach($shifts as $shift)
                                        <option value="{{ $shift->id }}">{{ $shift->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                       Добавить
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
