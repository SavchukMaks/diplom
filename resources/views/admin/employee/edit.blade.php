@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Додати працівника
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/employees/{{$employee->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Ім'я</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ім'я"
                           value="{{$employee->first_name}}" >
                </div>
                <div class="form-group">
                    <label>Фамілія</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Фамілія"
                           value="{{$employee->last_name}}" >
                </div>
                <div class="form-group">
                    <label>Посада</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Посада"
                           value="{{$employee->position}}" >
                </div>
                <div class="form-group">
                    <label>Дата народження</label>
                    <input type="date" class="form-control " id="birth_date" name="birth_date"
                           value="{{$employee->birth_date}}" >
                </div>
                <div class="form-group">
                    <label>Контакти</label>
                    <input type="text" class="form-control " id="contacts" name="contacts" placeholder="Контакти"
                           value="{{$employee->contacts}}" >
                </div>
                <div class="form-group">
                    <label>Коментарі</label>
                    <input type="text" class="form-control " id="comments" name="comments" placeholder="Коментарі"
                           value="{{$employee->comments}}" >
                </div>
                <button style="margin-top: 10px" class="btn btn-primary" type="submit">Відправити</button>
            </form>
        </div>
    </div>

@endsection