<?php

namespace App\Http\Controllers;
use App\Http\Resources\StaffResource;
use App\Models\staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = staff::all();
        return StaffResource::collection($staffs);
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
            'username'=>'required|string|min:1|max:255',
            'password'=>'required|string|min:1|max:255',
            'first_name'=>'required|string|min:1|max:255',
            'last_name'=>'required|string|min:1|max:255',
            'gender'=>'required|integer',
            'email'=>'required|email',
            'birthday'=>'required|date',
            'phone_number'=>'required|number|max:11',
            'address'=>'required|string',
            'permission'=>'required|integer',
        ]);
        $staffs = new staff();
        $staffs->username = $request->username;
        $staffs->password = bcrypt($request->password);
        $staffs->first_name = $request->first_name;
        $staffs->last_name = $request->last_name;
        $staffs->gender = $request->gender;
        $staffs->email = $request->email;
        $staffs->birthday = $request->birthday;
        $staffs->phone_number = $request->phone_number;
        $staffs->address = $request->address;
        $staffs->permission = $request->permission;
        $staffs->status = 1;
        if($staffs->save())
        {
            return new StaffResource($staffs);
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
        $staffs = staff::findOrFail($id);
        return new staffResource($staffs);
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
            'username'=>'required|string|min:1|max:255',
            'password'=>'required|string|min:1|max:255',
            'first_name'=>'required|string|min:1|max:255',
            'last_name'=>'required|string|min:1|max:255',
            'gender'=>'required|integer',
            'email'=>'required|email',
            'birthday'=>'required|date',
            'phone_number'=>'required|number|max:11',
            'address'=>'required|string',
            'permission'=>'required|integer',
        ]);
        $staffs = staff::findOrFail($id);
        $staffs->username = $request->username;
        $staffs->password = bcrypt($request->password);
        $staffs->first_name = $request->first_name;
        $staffs->last_name = $request->last_name;
        $staffs->gender = $request->gender;
        $staffs->email = $request->email;
        $staffs->birthday = $request->birthday;
        $staffs->phone_number = $request->phone_number;
        $staffs->address = $request->address;
        $staffs->permission = $request->permission;
        $staffs->status = 1;
        if($staffs->save())
        {
            return new StaffResource($staffs);
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
        $staffs = staff::findOrFail($id);
        if($staffs->delete())
        {
            return new StaffResource($staffs);
        }
    }
}
