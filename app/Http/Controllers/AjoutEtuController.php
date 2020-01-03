<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Etudiant;
use Illuminate\Support\Facades\Hash;

class AjoutEtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ajoutEtu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ajoutEtu');
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
            'matricule'=>'required',
            'groupe'=>'required',
            'cycle'=>'required'

         ]);

         //ajouter a la table des user
        $user=new User;
        $user->name =$request->input('name');
        $user->last_name =$request->input('last_name');
        $user->email =$request->input('email');
        $user->password=Hash::make($request->input('name').$request->input('matricule'));
        $user->Type="ETU";
        $user->save();
        $userEtudiant=new Etudiant;
        $userEtudiant->id_user=$user->id;
        $userEtudiant->cycle=$request->input('cycle');
        $userEtudiant->groupe=$request->input('groupe');
        $userEtudiant->matricule=$request->input('matricule');
        $userEtudiant->save();

        return redirect('AjoutEtu');
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
