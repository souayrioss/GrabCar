<?php

namespace App\Http\Controllers;

use App\Models\NosVehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NosVehiculeController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NosVehicule  $nosVehicule
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $voiture=DB::table('voiture')
        ->select('voiture.*')->get();
        return view('client.nosVehicule',['voiture'=>$voiture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NosVehicule  $nosVehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(NosVehicule $nosVehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NosVehicule  $nosVehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NosVehicule $nosVehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NosVehicule  $nosVehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(NosVehicule $nosVehicule)
    {
        //
    }
}
