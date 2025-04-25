@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
         @foreach($works as $work)
                <div class="col-md-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('storage/' . $work->thumbnail)}}" width="291" height="163"  alt="work" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$work->title}}</h5>
                    <p class="card-text">{{$work->description}}</p>
                    <a href="{{route('work.show', $work->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
         @endforeach
        </div>
        <div class="pagination justify-content-end">
            {{$works -> links()}}
        </div>
    </div>
@endsection







{{--    <div class="grid text-center">--}}
{{--        @foreach($works as $work)--}}
{{--            <div class="g-col-6">{{$work->title}} <img src="{{asset('storage/' . $work->thumbnail)}}" width="291" height="163"  alt="work"></div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
