@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('category')}}" method="POST">
            @csrf
            <select name="categories" >
                <option value="">service</option>
                <option value="watering">watering</option>
                <option value="delivery">delivery</option>
                <option value="cleaning">cleaning</option>
            </select>
            <select name="price" >
                <option value="">0</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
            </select>
            <select name="location" >
                <option value="">city</option>
                <option value="Amman">Amman</option>
                <option value="Aqaba">Aqaba</option>
                <option value="Iribd">Iribd</option>
            </select>
            <button type="submit"> search</button>
        </form>
        {{$services}}
        <ul>
            @foreach($services as $service)
                <li>{{$service->title}}</li>
                <li>{{$service->description}}</li>
                <li>{{$service->price}}</li>
                <li>{{$service->location}}</li>
                <li>{{$service->category}}</li>
            @endforeach
        </ul>
        {{$services->links()}}
    </div>
@endsection
