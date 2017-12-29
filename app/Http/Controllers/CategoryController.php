<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
		
        return view('categories.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
			'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
        ]);
		
        $category = Category::create($request->all());
		
		if ($request->file('img')) {
			$filename = $request->file('img')->store('images');
			$category->image = $filename;
			$category->save();
		}
        
		return redirect()->route('categories.index')->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        request()->validate([
            'name' => 'required',
			'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
			'status' => 'required',
        ]);
		
        $category->update($request->all());
		
		if ($request->file('img')) {
			$filename = $request->file('img')->store('images');
			$category->image = $filename;
			$category->save();
		}
		
        return redirect()->route('categories.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
		
        return redirect()->route('categories.index')->with('success', 'Deleted successfully');
    }
}
