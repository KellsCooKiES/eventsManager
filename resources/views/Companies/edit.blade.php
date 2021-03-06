@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование компании</div>

                    <div class="card-body">
                        <form method="POST" action="/companies/{{$company->id}}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Название компании:</label>
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Введите название компании" value="{{ $company->name }}">
                            </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить
                                    </button>
                                </div>
                        </form>
                        <form action="/companies/{{$company->id}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button  type="submit" class="btn btn-outline-danger">
                                Удалить компанию
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
