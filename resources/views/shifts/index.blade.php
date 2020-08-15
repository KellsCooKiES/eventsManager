@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($companies as $company)
                <div class="card">
                       <a href="/company/{{$company->id}}"><div class="card-header">{{$company->name}}</div></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
