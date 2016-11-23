<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->product = factory(App\Models\Product::class)->make([
            'id' => '1',
		'name' => 'laravel',
		'description' => 'I am Batman',
		'inventory' => '1',

        ]);
        $this->productEdited = factory(App\Models\Product::class)->make([
            'id' => '1',
		'name' => 'laravel',
		'description' => 'I am Batman',
		'inventory' => '1',

        ]);
        $user = factory(App\Repositories\User\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/products');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/products', $this->product->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/products', $this->product->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/products/1', $this->productEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeInDatabase('products', $this->productEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/products', $this->product->toArray());
        $response = $this->call('DELETE', 'api/v1/products/'.$this->product->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'product was deleted']);
    }

}
