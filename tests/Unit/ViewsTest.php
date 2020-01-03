<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function test_lien_view_AjoutEns()
    {
        $response = $this->get('/AjoutEns');

    $response->assertViewIs('ajouterEns');
     }


    public function test_lien_view_AjoutEtu()
    {
        $response = $this->get('/AjoutEtu');


        $response->assertViewIs('ajoutEtu');
    }



}
