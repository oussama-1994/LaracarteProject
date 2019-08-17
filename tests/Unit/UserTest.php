<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //test de titre
        $this->assertEquals('Laracarte WebSite',title_set(''));
    }
    public function testRoute(){
        //test de la route home , on recupere la route , puis test sur cette route
        $this->get(route('home'));//si la route est home
        $this->assertEquals('active',active_route_set('home'));//donc j'attend que est  active(home)
        $this->assertEquals('',active_route_set('about'));//home active donc about inactive TRUE
        $this->assertEquals('',active_route_set('contact'));//home active donc contact inactive TRUE

    }
}
