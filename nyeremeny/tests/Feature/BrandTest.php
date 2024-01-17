<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{

    
  

    public function test_brands_get(): void
    {
        $response = $this->get('/api/brands');

        $response->assertStatus(200);
    }


    public function test_brands_post(): void
    {
        $response = $this->post('/api/brands', ['name' => 'Loreal', 'country'=> 'UK']);

        $response->assertStatus(200);
    }

    public function test_brands_put(): void
    {
        $response = $this->put("/api/brands/1", ['name' => 'Loreal', 'country'=> 'U.K.']);

        $response->assertStatus(200);
    }

    public function test_brands_delete(): void
    {
        $response = $this->delete("/api/brands/4");

        $response->assertStatus(200);
    }



    
    

}   




