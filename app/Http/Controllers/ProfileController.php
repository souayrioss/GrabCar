<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function retour()
    {
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user=DB::table('users')
        ->where('username',$username)
        ->select('users.*')->get();
        return view('profile/profile',['users'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function datashow($id)
    {
        $user=DB::table('users')
        ->where('id',$id)
        ->select('users.*')->get();
        return view('profile/edit',['users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function modifier(Request $request,Profile $username )
    {
        $request->validate([
            'fullName'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
        ]);
        $updating = DB::table('users')
            ->where('username',$request->username)
            -> update([
                'fullName'=>$request->fullName,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
            if($updating){
            return Redirect::back();
            }else{
                return 'noooo';
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function supprimer($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return view('auth/login');
    }
}
