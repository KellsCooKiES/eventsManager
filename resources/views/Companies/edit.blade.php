@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование компании</div>

                    <div class="card-body">
                        <form method="POST" action="/company/{{$company->id}}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Название компании:</label>
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Введите название компании" value="{{ $company->name }}">
                            </div>
                            <div class="align-content-lg-between">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="/company/delete/{{$company->id}}" type="submit" class="btn btn-outline-danger">
                            Удалить компанию
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
