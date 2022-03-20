<?php

namespace App\Http\Controllers;

use App\Models\SingUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SingUpController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'username'=>'required|unique:users',
            'fullName'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:12'
        ]);
       // $query=SingUP::create($request->all());

        $user = new SingUp;
    $user->username = $request->username;
    $user->fullName = $request->fullName;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->email = $request->email;
    $user->password=Hash::make($request->password);
    $query=$user->save();
        if($query){
            //return 'okay';
            return view('auth/login');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SingUp  $singUp
     * @return \Illuminate\Http\Response
     */
    public function show(SingUp $singUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SingUp  $singUp
     * @return \Illuminate\Http\Response
     */
    public function edit(SingUp $singUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SingUp  $singUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SingUp $singUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SingUp  $singUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingUp $singUp)
    {
        //
    }
}
