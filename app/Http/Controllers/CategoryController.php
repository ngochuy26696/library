<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('backend.categories.list')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.categories.create');
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
            'name' => 'required|max:100'
        ]);

        if ($validator->fails()){
            return redirect(route('category-create'))
                ->withErrors($validator)
                ->withInput();
        } else {
            Category::insert([
                'name' => $request->input('name')
            ]);
            return redirect(route('category-index'))
                ->with('success', 'Category was created success');
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
        $books = Book::where('category_id', $id);
        $books = $books->paginate(10);
        return view('backend.books.list')
            ->with('books', $books);
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
        $category = Category::where('id', $id)->first();
        return view('backend.categories.update')
            ->with('category', $category);
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
            'name' => 'required|max:100'
        ]);

        if ($validator->fails()){
            return redirect(route('category-index'))
                ->with('errors', 'Category was updated fail');
        } else {
            Category::where('id', $id)->update([
                'name' => $request->input('name')
            ]);
            return redirect(route('category-index'))
                ->with('success', 'Category was updated success');
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
        $check = Category::where('id', $id)->delete();
        if ($check){
            return redirect(route('category-index'))
                ->with('success', 'Category was deleted success');
        } else {
            return redirect(route('category-index'))
                ->with('errors', 'Category was deleted fail');
        }
    }
}
