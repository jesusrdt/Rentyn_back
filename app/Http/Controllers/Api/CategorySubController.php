<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\SubCategory;

class CategorySubController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::latest()->paginate(10);
		
        return response()->json($subCategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]);
		
        $subCategory = SubCategory::create($request->all());
		
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
		$subCategory = SubCategory::findOrFail($id);
		
        return response()->json($subCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
		
        return response()->json($subCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        request()->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]);
		
        $subCategory->update($request->all());
		
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
        SubCategory::destroy($id);
		
		return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }
}
