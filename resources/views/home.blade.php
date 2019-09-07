@extends('layouts.app')

@extends('layouts.nav')

@section('content')
<div class="container">
    <h1>Admin page</h1>
    <nav class="navbar bg-light">
        <ul class="navbar-nav">
            <li class="navbar-brand">
                <a href="{{route('category-index')}}" class="nav-link">Category</a>
            </li>
            <li class="navbar-brand">
                <a href="{{route('book-index')}}" class="nav-link">Book</a>
            </li>
            <li class="navbar-brand">
                <a href="{{route('receipt-index')}}" class="nav-link">Receipt</a>
            </li>
            <li class="navbar-brand">
                <a href="{{route('user-index')}}" class="nav-link">User</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
