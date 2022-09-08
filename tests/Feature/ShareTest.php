<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/shares');

        $response->assertStatus(200);
    }

    public function testNewShareStatus()
    {
        $shareName = 'RWD';
        $sharePrice = 1000;
        $shareQuantity = 90;

        $response = $this->followingRedirects()
            ->post('/shares', [
                'share_name' => $shareName,
                'share_price' => $sharePrice,
                'share_qty' => $shareQuantity,])
            ->assertStatus(200);
    }

    public function testNewShareSave()
    {
        $response = $this->json('POST', '/shares', [
            'share_name' => 'KFC',
            'share_price' => 100,
            'share_qty' => 54,
        ]);

        $response->assertStatus(201);
    }


}
