@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($shifts as $shift)
                <div class="card mb-4">
                       <a href="/shifts/{{$shift->id}}"><div class="card-header">{{$shift->name}}</div></a>
                    <div class="btn-sm">
                    <a href="/shifts/edit/{{ $shift->id }}" class="btn btn-outline-success ">Edit</a>
                    </div>
                </div>
                @endforeach
                    <a href="shifts/create" class="btn btn-outline-success">Добавить смену</a>
            </div>
        </div>
    </div>
@endsection
