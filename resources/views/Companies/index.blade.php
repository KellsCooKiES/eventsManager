@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach($companies as $company)
                <div class="card mb-4">
                       <a href="/companies/{{$company->id}}">
                           <div class="card-header">{{$company->name}}
                           </div>
                       </a>
                    <div class="btn-sm">
                    <a href="/companies/edit/{{ $company->id }}" class="btn btn-outline-success">Edit</a>
                    </div>
                </div>
                @endforeach
                    <a href="companies/create" class="btn btn-outline-success">Добавить компанию</a>
            </div>
        </div>
    </div>
@endsection
