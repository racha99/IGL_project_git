<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Enseignant;
use App\Etudiant;

class CreationModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     //test si les model son creé correctement


     public function testBasicTest()
     {
         $this->assertTrue(true);
     }

     //test la fonction AjoutEtuController.store
    public function test_Creation_Etudiant()
    {
       $this->withoutExceptionHandling();
       $nbUsers=DB::table('users')->count();
       $nbEtudiants=DB::table('etudiants')->count();
       $responce=$this->post('/AjoutEtu',[
        'name'=>'john',
        'last_name'=>'smith',
        'email'=>'testEtu@gmail.com',
        'matricule'=>'1234',
        'groupe'=>11,
        'cycle'=>'test_cycle'

       ]);

       $this->assertCount($nbUsers+1,User::all());
       $this->assertCount( $nbEtudiants+1,Etudiant::all());
       User::where('email','=','testEtu@gmail.com')->first()->delete();
       Etudiant::where('cycle','=','test_cycle')->first()->delete();
    }


    //test la fonction AjoutEnsController.store
    public function test_Creation_Enseignant()
    {
       $this->withoutExceptionHandling();
       $nbUsers=DB::table('users')->count();
       $nbEnseignants=DB::table('enseignants')->count();
       $responce=$this->post('/AjoutEns',[
        'name'=>'john',
        'last_name'=>'smith',
        'email'=>'testEns@gmail.com',
        'module'=>'module_test',
        'nbGroupe'=>'11',
        'yearOfTeaching'=>'test_year'

       ]);

       $this->assertCount($nbUsers+1,User::all());
       $this->assertCount( $nbEnseignants+1,Enseignant::all());
       User::where('email','=','testEns@gmail.com')->first()->delete();
       Enseignant::where('yearOfTeaching','=','test_year')->first()->delete();
    }
}
