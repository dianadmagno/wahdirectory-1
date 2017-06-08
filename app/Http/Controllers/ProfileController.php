<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('profile.index')->with('user',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->designation = $request->input('designation');
        $user->primary_contact = $request->input('primary_contact');
        $user->secondary_contact = $request->input('secondary_contact');
        $user->email = $request->input('email');
        //$user->password = $request->input('password');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->date_of_hired = $request->input('date_of_hired');

        $user->save();

        Session::flash('success','The User was Successfully Save..!');

        return redirect()->route('profile.index',$user->id);
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
        $user = User::find($id);

        return view('profile.edit')->with('user',$user);
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
        $user = User::find($id);

        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->designation = $request->input('designation');
        $user->primary_contact = $request->input('primary_contact');
        $user->secondary_contact = $request->input('secondary_contact');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->date_of_hired = $request->input('date_of_hired');

        $user->save();
        
        Session::flash('success','The User was Updated Successfully..!');

        return redirect()->route('profile.index',$user->id);
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
