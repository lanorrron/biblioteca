<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Book_category;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items= Book::all();
        return view('book.bookIndex',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::all();
        return view('book.bookCreate',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=new Book();
        $book->name=$request->name;
        $book->nro_pages=$request->nro_pages;
        $book->description=$request->description;
        $book->url_image=$request->url_image;
        $book->save();
        foreach ($request->categories as $catID){

                $bookCategory=new Book_category();
                $bookCategory->book_id=$book->id;
                $bookCategory->category_id=$catID;
                $bookCategory->save();

        }

        return redirect()->Route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\book $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
