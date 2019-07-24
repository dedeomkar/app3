<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return view('userM.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('userM.create');
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
        $u = new User;
        $u->name = $request['name'];
        $u->id = $request['uid'];
        $u->password = Hash::make($request['password']);
        $u->email = $request['email'];
        $u->role = 'user'; 
        $u->save();
        return redirect(route('user_index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $uid)
    { 
        return view('userM.edit',compact('uid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $uid)
    {
        //
        $uid->name = $request['name'];
        $uid->id = $request['uid']; 
        $uid->email = $request['email'];
        $uid->role = $request['role']; 
        $uid->save();
        return redirect(route('user_index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $uid)
    {
        //
        $u = User::find($uid)->first(); 
        $u->delete();
        return redirect(route('user_index'));
    }
}
