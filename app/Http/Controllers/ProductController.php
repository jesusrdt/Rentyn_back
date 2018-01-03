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
        //

        $products =Product::Busqueda($request->get('busq'))
        ->paginate(10);
 
        return View('product.index',compact('products'));
        

    }

    
    public function create()
    {
        return View('product.registro');
    }

    
    public function valida()
    {
            $this->validate(request(), [
            'title' => 'required|min:2|max:50',
            'characteristic' => 'required|max:254',
            'imagen'  => 'mimes:jpeg,bmp,png',
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
        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/products',$file->getClientOriginalName());
        $product->imagen=$file->getClientOriginalName();
        }
        $product->save();

        
        }catch (Exception $e){
       
        return redirect()->back()->withInput()->withErrors($e);

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
        return View('product.edit',compact('product'));

    }

    
    public function update(Request $request, $id)
    {
        $this->valida(); //$file->getClientOriginalName()
        try {
        $input   = $request->all();
        $product =Product::findOrFail($id);
        $product->fill($input);
        if (Input::hasFile('imagen')){
           $file=Input::file('imagen');
           $file->move(public_path().'/imagenes/products',$file->getClientOriginalName());
            $product->imagen=$file->getClientOriginalName();
        }
        $product->update();
        }catch (Exception $e){
        
        return redirect()->back()->withInput()->withErrors($e);
    }
        return ('Update  Success!!!');

    }

    
    public function destroy($id)
    {
        $product =Product::findOrFail($id);
        $product->delete();
        return ('Delete  Success!!!');                   
    }
}
