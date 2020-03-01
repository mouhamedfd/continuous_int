<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class RouteListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRouteList()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        $exitCode=Artisan::call("route:list");
        $this->assertEquals($exitCode,0,"Probleme chargement des routes");

    }
}
