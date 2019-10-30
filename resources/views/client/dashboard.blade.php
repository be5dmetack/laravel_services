{{--@extends('client.layout')--}}
@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <div class="options">
        <a href="/dashboard/create" class="btn btn-primary">Add a new service</a>
        {{--        // CRUD Operations--}}
        {{--        // form to create a new service--}}
        {{--        // with the list of services delete/ update // or maybe we don't want to delete as we do have foreign keys--}}

        <div class="history mt-4">
            <h3 class="text-muted ml-5">List of services</h3>

            <ul>
                @if(count($services) > 0)
                    <div class="container">
                        <div class="row">

                            @foreach($services as $service)

                                <div class="card border-secondary m-3 col-4" style="max-width: 18rem;">

                                    <div class="card-header">Header</div>
                                    <div class="card-body text-secondary">
                                        <h5 class="card-title">{{$service->title}}</h5>
                                        <p class="card-text">{{$service->description}}</p>
                                        <a href="/services/{{$service->id}}" class="btn btn-primary">Details..</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @else
                    <p>There is no services right now, add new one!</p>
                @endif
            </ul>
        </div>
@endsection
