<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, ['fname' => 'required', 'lname =>' => 'required']);
        $user = new User(
            [
                'team' => $request->get('team'),
                'firstname' => $request->get('firstname'),
                'lasname' => $request->get('lasname'),
                'shoulder_width' => $request->get('shoulder_width'),
                'shirts_long' => $request->get('shirts_long'),
                'chest_size' => $request->get('chest_size'),
                'size' => $request->get('size'),
                'comment' => $request->get('comment'),
                'join_activity' => $request->get('join_activity'),
                'join_activityed' => $request->get('join_activityed'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
            ]
        );
        // dd($user);
        $user->save();
        return redirect()->route('user.index')->with('success', 'บันทึกข้อมูลเรียบร้อย');
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
    }
}
