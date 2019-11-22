<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class studentsController extends Controller
{
    public function create(Request  $request) {
        $Nom=$request['Nom'];
        $Prenom=$request['Prenom'];
        $Adresse_email=$request['Adresse_email'];
        $Date_de_naissance=$request['Date_de_naissance'];


        $student=new student();
        $student->Nom=$Nom;
        $student->Prénom=$Prenom;
        $student->Adresse_email=$Adresse_email;
        $student->Date_de_naissance=$Date_de_naissance;

        $student->save();
        return view('webapp');
    }
    public function show() {
        $students=student::all();
        return view ('webapp',['st'=>$students]);

    }
}
