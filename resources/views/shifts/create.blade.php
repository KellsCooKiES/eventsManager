@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавление смены</div>

                    <div class="card-body">
                        <form method="POST" action="/shifts/store">
                            @csrf

                            <div class="form-group">
                                <label  for="name">Название смены:</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Введите название смены">

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
