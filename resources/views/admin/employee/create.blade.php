@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Додати працівника
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.employee.save')}}" enctype="multipart/form-data">
            @csrf
            <div class="input-group" style="margin-bottom: 10px">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="img_path">Фото працівника</span>
                </div>
                <div class="custom-file">
                    <label class="custom-file-label" for="img_path">Виберіть файл</label>
                    <input type="file" class="custom-file-input" id="img_path" name="img_path">
                </div>
            </div>
            <div class="form-group">
                    <label>Ім'я</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ім'я"
                           value="" >
            </div>
            <div class="form-group">
                    <label>Фамілія</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Фамілія"
                           value="" >
            </div>
            <div class="form-group">
                    <label>Посада</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Посада"
                           value="" >
            </div>
            <div class="form-group">
                    <label>Дата народження</label>
                    <input type="date" class="form-control " id="birth_date" name="birth_date"
                           value="" >
            </div>
            <div class="form-group">
                    <label>Контакти</label>
                    <input type="text" class="form-control " id="contacts" name="contacts" placeholder="Контакти"
                           value="" >
            </div>
            <div class="form-group">
                    <label>Коментарі</label>
                    <input type="text" class="form-control " id="comments" name="comments" placeholder="Коментарі"
                           value="" >
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="files">Додати файл (резюме)</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="files" name="files">
                    <label class="custom-file-label" for="files">Виберіть файл</label>
                </div>
            </div>

            <button style="margin-top: 10px" class="btn btn-primary" type="submit">Відправити</button>
        </form>
    </div>
</div>
@endsection