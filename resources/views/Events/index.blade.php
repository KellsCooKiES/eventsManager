@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($events as $event)
                <div class="card mb-4">
                      <div class="card-header"><span>Название проекта: </span>
                          <a href="/events/{{$event->id}}">{{$event->project_name}}</a>
                      </div>
                    <div class="btn-sm">
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-outline-success ">Edit</a>
                    </div>
                </div>
                @endforeach
                    <a href="events/create/{{ Auth::user()->company->id }}" class="btn btn-outline-success">Добавить событие</a>
            </div>
        </div>
    </div>
@endsection
