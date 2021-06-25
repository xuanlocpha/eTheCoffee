<?php

namespace App\Http\Controllers;
use App\Http\Resources\ComboDetailResource;
use App\Models\combo_detail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ComboDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $combo_details = combo_detail::all();
        return ComboDetailResource::collection($combo_details);
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
            'product_id'=>'required|integer',
            'combo_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $combo_details = new combo_detail();
        $combo_details->product_id = $request->product_id;
        $combo_details->combo_id = $request->combo_id;
        $combo_details->quantity = $request->quantity;
        if($combo_details->save())
        {
            return new ComboDetailResource($combo_details);
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
        $combo_details = combo_detail::findOrFail($id);
        return new ComboDetailResource($combo_details);
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
            'product_id'=>'required|integer',
            'combo_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $combo_details = combo_detail::findOrFail($id);
        $combo_details->product_id = $request->product_id;
        $combo_details->combo_id = $request->combo_id;
        $combo_details->quantity = $request->quantity;
        if($combo_details->save())
        {
            return new ComboDetailResource($combo_details);
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
        $combo_details = combo_detail::findOrFail($id);
        if($combo_details->delete())
        {
            return new ComboDetailResource($combo_details);
        }
    }
}
