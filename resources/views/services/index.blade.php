@extends('layouts.app')

@section('content')
    <div class="container">
        {{$services}}
        <ul>
            @foreach($services as $service)
                <li>{{$service->title}}</li>
            @endforeach
        </ul>
        {{$services->links()}}
    </div>
@endsection
