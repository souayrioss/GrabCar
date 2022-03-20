<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'noooo';
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
        $commande=new Commande;
        $commande->nameCl=$request->nameCl;
        $commande->phoneCl=$request->phoneCl;
        $commande->emailCl=$request->emailCl;
        $commande->addressCl=$request->addressCl;
        $commande->dateCommande=$request->dateCommande;
        $commande->nbjours=$request->nbjours;
        $commande->categorieVoi=$request->categorieVoi;
        $commande->typeVoi=$request->typeVoi;
        $commande->colorVoi=$request->colorVoi;
        $commande->prixTotal=$request->prixTotal;
        if($request->numCard == 4242424242424242){
            $pay=$commande->save();
            if($pay){
                return view('payment/payvalid');
            }else{
            return view('payment/payno');
            }
        }else{
            return view('payment/payno');
        }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        $commande=DB::table('commande')
        ->select('commande.*')->get();
        return view('admin.commande',['commande'=>$commande]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
