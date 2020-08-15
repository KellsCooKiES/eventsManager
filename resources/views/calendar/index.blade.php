@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
{{--                @foreach($events as $event)--}}
{{--                    <div class="card mb-4">--}}
{{--                        <div class="card-header"><span>Событие #{{$event->id}} </span>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <ul>--}}
{{--                                <li>{{$event->project_name}}</li>--}}
{{--                                <li>{{$event->cost}}</li>--}}
{{--                                <li>{{$event->work_type}}</li>--}}
{{--                                <li>{{\App\User::find($event->user_id)->name}}</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                @endforeach--}}

                @foreach($events as $data => $value)
                    <div class="col-8">
                        <h3>{{$data}}</h3>
                        @foreach($value as $event)
                            <div class="card">
                              <div class="card-body">
                                  <p> Название проекта: {{$event->project_name}}
                                  </p>
                                  <p>Цена работ: {{$event->cost}}
                                  </p>
                                  <p>Тип работ: {{$event->cost}}
                                  </p>
                                  <p>Ответственный сотрудник: {{$event->cost}}
                                  </p>
                                  <p>Смена: {{$event->shift->name}}
                                  </p>
                              </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
