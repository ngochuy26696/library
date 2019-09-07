@extends('layouts.app')

@extends('layouts.nav')

@section('content')
    <div class="container">
        @if(session()->has('errors'))
            <div class="alert alert-danger">
                {{session()->get('errors')}}
            </div>
        @endif
        <div class="form-group">
            <h2>Update category</h2>
        </div>
        <form action="{{route('category-update', $category->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
                <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
            </div>
        </form>
    </div>
@endsection