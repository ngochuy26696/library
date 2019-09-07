@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <form action="{{route('web-index')}}" method="get">
                <input type="text" name="book_name" value="{{isset($book_name) ? $book_name : ''}}" class="input-search">
                <input type="submit" value="Search" class="btn btn-success">
            </form>
        </div>
        @extends('frontend.nav-web')
        <div class="row">
            <div class="col-md-2 side-bar">
                <h2><a href="{{route('web-index')}}">Categories</a></h2>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('web-detail', $category->id)}}" class="nav-link category-name">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-10 list-item">
                @foreach($books as $book)
                    <div class="item">
                        <h3><a href="">{{$book->name}}</a></h3>
                        <p class="publisher">{{$book->publisher}}</p>
                        <p>{{$book->author}}</p>
                        <span class="add-to-cart btn btn-primary">Thêm vào giỏ</span>
                    </div>
                @endforeach
            </div>
        </div>
        {{$books->links()}}
    </div>

@endsection