<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $book_name = $request->input('book_name');
        $books = Book::where('name', 'LIKE', "%$book_name%");
        $books = $books->paginate(5);
        return view('backend.books.list')
            ->with('books', $books)
            ->with('book_name', $book_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('backend.books.create')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'number' => 'required|numeric'
        ]);

        if ($validator->fails()){
            return redirect(route('book-create'))
                ->withErrors($validator)
                ->withInput();
        } else {
            Book::insert([
                'name' => $request->input('name'),
                'publisher' => $request->input('publisher'),
                'author' => $request->input('author'),
                'category_id' => $request->input('category_id'),
                'number' => $request->input('number'),
                'image' => $request->input('image')
            ]);
            return redirect(route('book-index'))
                ->with('success', 'Book was create success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::where('id', $id)->first();
        $categories = Category::all();
        return view('backend.books.update')
            ->with('book', $book)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'number' => 'required|numeric'
        ]);

        if ($validator->fails()){
            return redirect(route('book-index'))
                ->with('errors', 'Book was updated fail');
        } else {
            Book::where('id', $id)->update([
                'name' => $request->input('name'),
                'publisher' => $request->input('publisher'),
                'author' => $request->input('author'),
                'category_id' => $request->input('category_id'),
                'number' => $request->input('number'),
                'image' => $request->input('image')
            ]);
            return redirect(route('book-index'))
                ->with('success', 'Book was updated success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $id = $_POST['id'];
        $check = Book::where('id', $id)->delete();
        if ($check){
            return redirect(route('book-index'))
                ->with('success', 'Book was deleted success');
        } else {
            return redirect(route('book-index'))
                ->with('errors', 'Book was delete fail');
        }
    }
}
