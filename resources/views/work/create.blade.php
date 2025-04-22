@extends('layouts.app')
@section('content')
    <form action="{{ route('work.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Название работы</label>
            <input name="title" class="form-control" id="title" placeholder="Название">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="sketchfab_url" class="form-label">Ссылка на Sketchfab</label>
            <input type="url" name="sketchfab_url" class="form-control" id="sketchfab_url" placeholder="https://sketchfab.com/...">
        </div>

        <div class="input-group mb-3">
            <input type="file" name="thumbnail" class="form-control" id="thumbnail">
            <label class="input-group-text" for="thumbnail">Загрузить превью</label>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="mview_path" class="form-control" id="mview_path">
            <label class="input-group-text" for="mview_path">Загрузить .mview</label>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
