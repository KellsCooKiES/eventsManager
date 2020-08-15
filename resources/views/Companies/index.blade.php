@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($companies as $company)
                <div class="card mb-4">
                       <a href="/company/{{$company->id}}">
                           <div class="card-header">{{$company->name}}
                           </div>
                       </a>
                    <div class="btn-sm">
                    <a href="/company/edit/{{ $company->id }}" class="btn btn-outline-success">Edit</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
