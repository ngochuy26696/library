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
            <h2>Create category</h2>
        </div>
        <form action="{{route('category-create')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Create" class="btn btn-success">
                <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
            </div>
        </form>
    </div>
@endsection