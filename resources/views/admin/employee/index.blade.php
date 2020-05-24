@extends('layouts.admin')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @can('venue_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.employee.create") }}">
                    Додати працівника
                </a>
            </div>
        </div>
    @endcan
    <div class="card-deck">
        @foreach($employee as $employ_details)
        <div class="card" >
            <img class="card-img-top" src="/storage/{{$employ_details->img_path}}" alt="Employee photo">
            <div class="card-body">
                <a href="/admin/employees/{{$employ_details->id}}">
                <h5 class="card-title">{{$employ_details->first_name }} {{$employ_details->last_name}}</h5>
                </a>
                <p class="card-text">{{$employ_details->position}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Оновленно {{$employ_details->updated_at}}</small></p>
            </div>
        </div>
        @endforeach
    </div>
@endsection