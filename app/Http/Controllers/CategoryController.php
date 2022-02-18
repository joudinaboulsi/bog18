<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $categories = Category::all();
        return view('categories.category')->with(compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              $categories = Category::all();
        return view('categories.create')->with(compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        if ($category->save() ) {
            return redirect()->route('categories.index')->with(['success' => 'Category added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add category']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
              $categories = Category::all();
        return view('categories.edit')->with(compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
           {
        $category->name = $request->name;
        $category->description = $request->description;

        if ($category->save() ) {
            return redirect()->route('categories.index')->with(['success' => 'Category successfully updated.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update category']);
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
              if ($category->delete()) {
            return redirect()->back()->with(['success' => 'Category successfully deleted.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete category.']);
    }
}
