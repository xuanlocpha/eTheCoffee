<?php

namespace App\Http\Controllers;
use App\Http\Resources\RewardResource;
use App\Models\reward;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rewards = reward::all();
        return RewardResource::collection($rewards);
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
            'image'=>'required',
            'description'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'point'=>'required|integer',
        ]);
        $rewards = new reward();
        $rewards->name = $request->name;
        $rewards->image = $request->image;
        $rewards->description = $request->description;
        $rewards->start_date = $request->start_date;
        $rewards->end_date = $request->end_date;
        $rewards->point = $request->point;
        $rewards->status = 1;
        if($rewards->save())
        {
            return new RewardResource($rewards);
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
        $rewards = reward::findOrFail($id);
        return new RewardResource($rewards);
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
            'image'=>'required',
            'description'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'point'=>'required|integer',
        ]);
        $rewards = reward::findOrFail($id);
        $rewards->name = $request->name;
        $rewards->image = $request->image;
        $rewards->description = $request->description;
        $rewards->start_date = $request->start_date;
        $rewards->end_date = $request->end_date;
        $rewards->point = $request->point;
        $rewards->status = 1;
        if($rewards->save())
        {
            return new RewardResource($rewards);
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
        if($rewards->save())
        {
            return new RewardResource($rewards);
        }
    }
}
