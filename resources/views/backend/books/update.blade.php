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
            <h2>Update book</h2>
        </div>
        <form action="{{route('book-update', $book->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{$book->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" name="publisher" value="{{$book->publisher}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" value="{{$book->author}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Category ID</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($category->id == $book->category_id) ? 'selected' : ''}}>
                            {{$category->id}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Number</label>
                <input type="text" name="number" value="{{$book->number}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" value="{{$book->image}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
                <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
            </div>
        </form>
    </div>
@endsection