<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use Exception;
use Session;


class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $products =Product::Busqueda($request->get('busq'))
        ->paginate(10);
        return View('products.reference-products',compact('products'));
    }

    
    public function create()
    {
        return View('products.reference-product-form');
    }

    
    public function valida()
    {
            $this->validate(request(), [
            'title' => 'required|min:2|max:50',
            'characteristic' => 'required|max:254',
            'imagen'  => 'mimes:jpeg,png',
            'status' => 'required'
            ]);


    }


    public function store(Request $request)
    {
        
        $this->valida();
        $input = $request->all();
        try {

        $product = new Product;
        $product->fill($input);
        $product->imagen='...';
        $product->save();

        $producti=Product::findOrFail($product->id);
        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $idm=$product->id.'-pf.'.$file->getClientOriginalExtension();    
            $file->move(storage_path().'/app/public/prod-reference',$idm);
        $producti->imagen=$idm;
        }
        $producti->update();

        
        }catch (Exception $e){
       
        return ('Error');

        }
        return ('Add Success!!!');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $product =Product::findOrFail($id);
        
    }

    
    public function update(Request $request, $id)
    {
        $this->valida(); 
        try {
        $input   = $request->all();
        $product =Product::findOrFail($id);
        $product->fill($input);
        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $idm=$product->id.'-pf.'.$file->getClientOriginalExtension();    
            $file->move(storage_path().'/app/public/prod-reference',$idm);
        $producti->imagen=$idm;
        }
        $product->update();
        }catch (Exception $e){
        
        return ('Error');
    }
        return ('Update Success!!!');

    }

    
    public function destroy($id)
    {
        $product =Product::findOrFail($id);
        $product->delete();
        return ('Delete Success!!!');                   
    }
}
