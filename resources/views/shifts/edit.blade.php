@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование смены</div>

                    <div class="card-body">
                        <form method="POST" action="/shifts/{{$shift->id}}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Название компании:</label>
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Введите название смены" value="{{ $shift->name }}">
                            </div>
                            <div class="align-content-lg-between">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form action="/shifts/{{$shift->id}}" method="POST">

                            @csrf
                            @method('DELETE')

                        <button  type="submit" class="btn btn-outline-danger">
                            Удалить смену
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
