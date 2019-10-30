@extends('layouts.app')

@section('content')
    <h1 class="text-muted">Create a new post</h1>
    <form method="post" action="/dashboard/save" class="w-75">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp"
                   placeholder="Enter title..">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"
                      id="description"
                      class="form-control"
                      aria-describedby="emailHelp"
                      placeholder="Enter description.."></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="JD">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <select id="location" class="custom-select" name="location">
                <option selected>Location</option>
                <option value="Amman">Amman</option>
                <option value="Zarqa">Zarqa</option>
                <option value="Irbid">Irbid</option>
                <option value="Jarash">Jarash</option>
            </select>
        </div>

        <div class="form-group">
            <label for="time">Time</label>
            <input id="time" type="date" id="start" name="time"
                   min="2019-12-12" max="2020-12-12"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" class="custom-select" name="category">
                <option selected>Category</option>
                <option value="cleaning">Cleaning</option>
                <option value="watering">Watering</option>
                <option value="assassinate">Assassinate</option>
                <option value="delivery">Delivery</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection
