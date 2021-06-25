<?php

namespace App\Http\Controllers;
use App\Http\Resources\OptionResource;
use App\Models\option;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $options = option::all();
        return OptionResource::collection($options);
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
        ]);
        $options = new option();
        $options->name = $request->name;
        $options->status = 1;
        if($options->save())
        {
            return new OptionResource($options);
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
        $options = option::findOrFail($id);
        return new OptionResource($options);
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
        ]);
        $options = option::findOrFail($id);
        $options->name = $request->name;
        $options->status = 1;
        if($options->save())
        {
            return new OptionResource($options);
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
        $options = option::findOrFail($id);
        if($options->delete())
        {
            return new OptionResource($options);
        }
    }
}
