@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col">
        <div class="ratio ratio-16x9" style="width: 1028px; height: 524px;">
            <iframe src="{{ $work->sketchfab_url }}"
                    title="3D model"
                    allowfullscreen
                    frameborder="0">
            </iframe>
        </div>
            </div>
          <div class="col">
        <div class="work label">
            {{$work->title}}
            <a href="{{route('work.edit', $work->id)}}">edit</a>
        </div>
          </div>
        </div>
    </div>

@endsection
