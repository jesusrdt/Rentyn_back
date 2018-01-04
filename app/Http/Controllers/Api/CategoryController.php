<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
		
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = Category::pluck('name', 'id');
		
		return response()->json(['sub_category' => $subCategories]);
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
        
		return response()->json(['success' => true, 'message' => 'Created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$category = Category::findOrFail($id);
		
		$selectSubCategory = [];
		
		$subCategory = SubCategory::with('category')->where('category_id', '=', $id)->get();
		
		foreach ($subCategory as $sub) {
			$selectSubCategory[] = $sub->category->id;
		}
		
        return response()->json(['category' => $category, 'sub_category' => $selectSubCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
		
		$selectSubCategory = [];
		
		$subCategory = SubCategory::with('category')->where('category_id', '=', $id)->get();
		
		foreach ($subCategory as $sub) {
			$selectSubCategory[] = $sub->category->id;
		}
		
        return response()->json(['category' => $category, 'sub_category' => $selectSubCategory]);
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
		
        return response()->json(['success' => true, 'message' => 'Updated successfully']);
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
		
        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }
}
