<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CrudController extends Controller
{
    public function view()
    {
        return view('crud.view');
        // return view('view');
    }
    public function crud()
    {
        return view('crud.crud');
        // return view('view');
    }

    public function store(Request $request)
    {
        $request->validate([
        'matricule'=>'required|unique:voiture',
        'categorie'=>'required',
        'type'=>'required',
        'color'=>'required',
        'prix'=>'required',
        'stock'=>'required',
        'image'=>'required',
    ]);
        //$voiture=Crud::create($request->all());
        $voiture=new Crud;
        $voiture->idVoiture=$request->idVoiture;
        $voiture->matricule=$request->matricule;
        $voiture->categorie=$request->categorie;
        $voiture->type=$request->type;
        $voiture->color=$request->color;
        $voiture->prix=$request->prix;
        $voiture->stock=$request->stock;
        $voiture->image=$request->image;
        $voiture->save();
        return view('crud.crud');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=Crud::all();
        return view('crud.view',['voiture'=>$data]);
        // return view('view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function datashow($idVoiture)
    {
        // $data = DB::table('voiture')->find($idVoiture);
        // $data = Crud::findOrFail($idVoiture);
        // $data=Crud::find($idVoiture);
        // return view('edit',['voiture'=>$data]);
        // // return view('edit');
        $voiture=DB::table('voiture')
        ->where('idVoiture',$idVoiture)
        ->select('voiture.*')->get();
        return view('crud/edit',['voiture'=>$voiture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->idVoiture;
        // $data=Crud::find($request->idVoiture);
        // $data->matricule=$request->matricule;
        // $data->categorie=$request->categorie;
        // $data->type=$request->type;
        // $data->prix=$request->prix;
        // $data->image=$request->image;
        $request->validate([
            'matricule'=>'required',
            'categorie'=>'required',
            'type'=>'required',
            'color'=>'required',
            'prix'=>'required',
            'stock'=>'required',
            'image'=>'required',
        ]);

        $updating = DB::table('voiture')
            ->where('idVoiture',$request->idVoiture)
            ->update([
                'matricule'=>$request->matricule,
                'categorie'=>$request->categorie,
                'type'=>$request->type,
                'color'=>$request->color,
                'prix'=>$request->prix,
                'stock'=>$request->stock,
                'image'=>$request->image
            ]);
            // ->update([
            //     'idVoiture'=>$request->input('idVoiture'),
            //     'matricule'=>$request->input('matricule'),
            //     'categorie'=>$request->input('categorie'),
            //     'type'=>$request->input('type'),
            //     'color'=>$request->input('color'),
            //     'prix'=>$request->input('prix'),
            //     'type'=>$request->input('type'),
            //     'image'=>$request->input('image')
            // ]);
            if($updating){
            return $this->show();
        }else{
            return 'noooo';
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function delete($idVoiture)
    {

    DB::table('voiture')->where('idVoiture',$idVoiture)->delete();
        // $data=Crud::find($idVoiture);
        // $data->delete();
        // $data=Crud::all();
        // return view('view', ['voiture'=> $data]);
    // return 'view';
    // return $this->show();
    return Redirect::back();
    }
}
