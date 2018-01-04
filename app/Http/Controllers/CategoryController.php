<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

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
		$subCategories = Category::pluck('name', 'id');
		$selectSubCategory = [];
		
        return view('categories.create', compact('subCategories', 'selectSubCategory'));
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
		
		$subCategorys = $request->input('category_sub');
		if (!empty($category) && is_array($subCategorys)) {
			foreach ($subCategorys as $key => $value) {
				SubCategory::create([
					'category_id' => $category->id,
					'subcategory_id' => $value,
				]);
			}
		}
		
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
		$subCategories = Category::pluck('name', 'id')->toArray();
		
		$selectSubCategory = [];
		
		$subCategory = SubCategory::with('category')->where('category_id', '=', $category->id)->get();
		
		foreach ($subCategory as $sub) {
			$selectSubCategory[] = $sub->category->id;
		}
		
        return view('categories.edit', compact('category', 'subCategories', 'selectSubCategory'));
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
		
		$subCategorys = $request->input('category_sub');
		if (!empty($category) && is_array($subCategorys)) {
			foreach ($subCategorys as $key => $value) {
				$subCategory = SubCategory::find($value);
				if (empty($subCategory)) {
					SubCategory::create([
						'category_id' => $category->id,
						'subcategory_id' => $value,
					]);
				}
			}
		}
		
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
