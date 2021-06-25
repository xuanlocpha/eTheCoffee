<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Support\Facades\Validator;
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
        $products = product::all();
        return ProductResource::collection($products);
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
        //
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name'=>'required|string|min:1|max:255',
            'quantity'=>'required|integer',
            'price'=>'required',
            'image'=>'required',
            'popular'=>'required|integer',
        ]);
        $products = new product();
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->popular = $request->popular;
        $products->status = 1;
        if($products->save())
        {
            return new ProductResource($products);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = product::findOrFail($id);
        return new ProductResource($products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name'=>'required|string|min:1|max:255',
            'quantity'=>'required|integer',
            'price'=>'required',
            'image'=>'required',
            'popular'=>'required|integer',
        ]);
        $products = product::findOrFail($id);
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->popular = $request->popular;
        $products->status = 1;
        if($products->save())
        {
            return new ProductResource($products);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = product::findOrFail($id);
        if($products->delete())
        {
            return new ProductResource($products);
        }
    }
}
