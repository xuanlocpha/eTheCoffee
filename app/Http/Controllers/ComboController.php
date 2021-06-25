<?php

namespace App\Http\Controllers;
use App\Http\Resources\ComboResource;
use App\Models\combo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $combos = combo::all();
        return ComboResource::collection($combos);
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
            'name'=>'required|string|min:1|max:255',
            'image' => 'required',
            'description' => 'required',
            'actual_price'=>'required|integer',
            'actual_price'=>'required|integer',
            'discount_price'=>'required|integer',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
        ]);
        $combos = new combo();
        $combos->name = $request->name;
        $combos->image = $request->image;
        $combos->description = $request->description;
        $combos->actual_price = $request->actual_price;
        $combos->discount_price = $request->discount_price;
        $combos->start_date = $request->start_date;
        $combos->end_date = $request->end_date;
        $combos->status = 1;
        if($combos->save())
        {
            return new ComboResource($combos);
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
        $combos = combo::findOrFail($id);
        return new ComboResource($combos);
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
            'name'=>'required|string|min:1|max:255',
            'image' => 'required',
            'description' => 'required',
            'actual_price'=>'required|integer',
            'actual_price'=>'required|integer',
            'discount_price'=>'required|integer',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
        ]);
        $combos = combo::findOrFail($id);
        $combos->name = $request->name;
        $combos->image = $request->image;
        $combos->description = $request->description;
        $combos->actual_price = $request->actual_price;
        $combos->discount_price = $request->discount_price;
        $combos->start_date = $request->start_date;
        $combos->end_date = $request->end_date;
        $combos->status = 1;
        if($combos->save())
        {
            return new ComboResource($combos);
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
        $combos = combo::findOrFail($id);
        if($combos->delete())
        {
            return new ComboResource($combos);
        }
    }
}
