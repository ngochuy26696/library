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
            <h2>Create book</h2>
        </div>
        <form action="{{route('book-create')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" name="publisher" value="{{old('publisher')}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" value="{{old('author')}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Category ID</label>
                <select name="category_id" class="form-control">
                    <option value="">---Choose Category ID---</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{(old('category_id') == $category->id) ? 'selected' : ''}}>
                            {{$category->id}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Number</label>
                <input type="text" name="number" value="{{old('number')}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" value="{{old('image')}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Create" class="btn btn-success">
                <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
            </div>
        </form>
    </div>
@endsection