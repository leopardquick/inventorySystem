<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('product.all',[
            'products' => Product::with('user')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.index' , [
            'categorys' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'barcode' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required',
            'cost' => 'required',
            'quantity' => 'required',
        ]);

        if($request->hasFile('pic')){
            $validated["logo"] = $request->file("pic")->store("logos","public");
        }

 
        $request->user()->products()->create($validated);
 
        return redirect(route('product.index'));

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view("product.view",[
            "product" => $product
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //

       // $this->authorize('update',$product);

        return view("product.edit" , [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //

       // $this->authorize('update',$product);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'barcode' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required',
            'cost' => 'required',
            'quantity' => 'required',
        ]);

        $product->update($validated);

        return redirect(route('product.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //

        $product->delete();

        return redirect(route("product.index"));
    }

    public function getByCode($productCode){

      $result =  Product::where('code',$productCode)->take(1)->get();
      return json_encode($result);
    }


    
}
