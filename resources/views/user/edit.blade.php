@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование компании</div>

                    <div class="card-body">
                        <form method="POST" action="/user/update/{{ auth()->id() }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">ФИО Сотрудника: </label>
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Введите ФИО" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email Сотрудника: </label>
                                <input class="form-control" type="text" id="name" name="email"
                                       placeholder="Введите ФИО" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label for="company">Компания :</label>
                                <select class="form-control" id="company" name="company_id">
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}"   @if( Auth::user()->company_id == $company->id) selected @endif >{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить
                                </button>
                            </div>
                        </form>
                        <form action="/user/{{auth()->id()}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button  type="submit" class="btn btn-outline-danger">
                                Удалить сотрудника
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
