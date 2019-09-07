@extends('layouts.app')

@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="form-group">
            <h1>Category list</h1>
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
            <a href="{{route('category-create')}}" class="btn btn-primary">Create category</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('category-detail', $category->id)}}" class="btn btn-info">Detail</a>
                    </td>
                    <td>
                        <a href="{{route('category-update', $category->id)}}" class="btn btn-secondary">Update</a>
                    </td>
                    <td>
                        <form action="{{route('category-delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="form-group">
            <input type="button" value="Back" onclick="history.back()" class="btn btn-warning">
        </div>
    </div>
@endsection