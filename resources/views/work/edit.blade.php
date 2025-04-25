@extends('layouts.app')
@section('content')
        <form action="{{ route('work.update', $work->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input name="title" class="form-control" id="title" placeholder="Enter title"
                       value="{{$work->title}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea name="description"  id="description" class="form-control" aria-label="Enter description">
                    {{$work->description}}
                </textarea>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Sketchfab URL</span>
                <input type="url" name="sketchfab_url" class="form-control" id="sketchfab_url"
                       placeholder="https://sketchfab.com/..." value="{{$work->sketchfab_url}}">
            </div>

            <div class="input-group mb-3">
                <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                <label class="input-group-text" for="thumbnail">Load thumbnail</label>
            </div>

            <div class="input-group mb-3">
                <input type="file" name="mview_path" class="form-control" id="mview_path">
                <label class="input-group-text" for="mview_path">Load .mview</label>
            </div>

            <div class=" text-center mt-4 d-grid gap-1 col-2 mx-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    @endsection
