<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\categoty;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos= category::all();
        return view('category.index',['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=new category();
        $category->name=$request->name;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoty  $categoty
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Category::find($id);
        return view('category.delete',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoty  $categoty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('category.update',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoty  $categoty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $category=Category::find($id);
        $category->name=$request->name;
        $category->save();

        return redirect()->Route('category.index')->with("success","updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoty  $categoty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->Route('category.index')->with("success",'removed successfully');
    }
}
