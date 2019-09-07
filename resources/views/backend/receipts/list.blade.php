@extends('layouts.app')

@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="form-group">
            <h1>Receipt list</h1>
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
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Book ID</th>
                <th>Date borrow</th>
                <th>Date return</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach($receipts as $receipt)
                <tr>
                    <td>{{$receipt->id}}</td>
                    <td>{{$receipt->user_id}}</td>
                    <td>{{$receipt->book_id}}</td>
                    <td>{{$receipt->date_borrow}}</td>
                    <td>{{$receipt->date_return}}</td>
                    <td>{{$receipt->status}}</td>
                    <td>
                        <form action="{{route('receipt-delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$receipt->id}}">
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