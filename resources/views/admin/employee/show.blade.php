@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-5 col-xlg-3 col-md-5">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                    <center class="m-t-30"> <img src="/storage/{{$employee->img_path}}" class="rounded mx-auto d-block" width="200">
                    <h4 class="card-title m-t-10" style="
                            margin-top: 10px;">{{$employee->first_name }} {{$employee->last_name}}</h4>
                    <h6 class="card-subtitle">{{$employee->position}}</h6>
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-body">
                <p class="text-muted">Дата народження </p>
                <h5>{{$employee->birth_date}}</h5>
                <p class="text-muted">Контакти</p>
                <h5>{{$employee->contacts}}</h5>
                <p class="text-muted">Коментарі</p>
                <h5>{{$employee->comments}}</h5>
                <p class="text-muted">Файли</p>
                <a download="Файл {{$employee->first_name }} {{$employee->last_name}}"
                   href="{{ Storage::url($employee->files) }}">
                <button type="button" class="btn btn-info">Завантижити файл</button>
                </a>
                <a href="/admin/employees/{{$employee->id}}/edit">
                    <button type="button" class="btn btn-warning">Редагувати</button>
                </a>
                <a href="/admin/employees/{{$employee->id}}/destroy">
{{--                <a href="{{route('admin.employee.destroy')}}">--}}
                    <button type="button" class="btn btn-danger">Видалити</button>
                </a>
{{--                <a download="Файл {{$employee->first_name }} {{$employee->last_name}}" href="{{Storage::url($employee->files) }}" title="Файл {{$employee->first_name }} {{$employee->last_name}}">Завантажити</a>--}}
                <br>
            </div>
            <div class="card-footer">
                <small class="text-muted">Оновленно {{$employee->updated_at}}</small></p>
            </div>
        </div>
    </div>
</div>
@endsection