@extends('layouts.app')

@extends('layouts.nav')

@section('content')

    <div class="container">
        <div class="form-group">
            <h1>Book list</h1>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        @if(session()->has('errors'))
            <div class="alert alert-danger">
                {{session()->get('errors')}}
            </div>
        @endif
        <div class="form-group">
            <a href="{{route('book-create')}}" class="btn btn-primary">Create book</a>
        </div>
        <div class="form-group">
            <form action="{{route('book-index')}}" method="get">
                <input type="text" name="book_name" value="{{isset($book_name) ? $book_name : ''}}">
                <input type="submit" value="Search" class="btn btn-info">
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Publisher</th>
                <th>Author</th>
                <th>Category ID</th>
                <th>Number</th>
                <th>Image</th>
                <th>TEST</th>
                <th colspan="3">Action</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category_id}}</td>
                    <td>{{$book->number}}</td>
                    <td>{{$book->image}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>
                        <a href="{{route('book-detail', $book->id)}}" class="btn btn-info">Detail</a>
                    </td>
                    <td>
                        <a href="{{route('book-update', $book->id)}}" class="btn btn-secondary">Update</a>
                    </td>
                    <td>
                        <form action="{{route('book-delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$book->id}}">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="form-group">
            <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
        </div>
        {{$books->links()}}
    </div>
@endsection