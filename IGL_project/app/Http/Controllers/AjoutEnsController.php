<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Enseignant;
use Illuminate\Support\Facades\Hash;

class AjoutEnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    
    {
        //
        return view('ajouterEns');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ajouterEns');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request,[
            'name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'module'=>'required',
            'nbGroupe'=>'required',
            'yearOfTeaching'=>'required'
 
         ]);

         // n3amrou user 
         $user=new User;
         $user->name=$request->input('name');
         $user->last_name=$request->input('last_name');
         $user->email=$request->input('email');
         $user->password=Hash::make($request->input('name').$request->input('last_name'));
         $user->save();

         $enseignant=new Enseignant;
         $enseignant->module=$request->input('module');
         $enseignant->nbGroupe=$request->input('nbGroupe');
         $enseignant->yearOfTeaching=$request->input('yearOfTeaching');
         $enseignant->id_user=$user->id;
         $enseignant->save();
         

        
        return "ca marche !";
        //
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
