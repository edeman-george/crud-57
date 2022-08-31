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

    public function testStore_new_shares()
    {
        $shareName = 'M&S';
        $sharePrice = 100;
        $shareQuantity = 10;

        $response = $this->followingRedirects()
            ->post('/shares', [
                'share_name' => $shareName,
                'share_price' => $sharePrice,
                'share_qty' => $shareQuantity,])
            ->assertStatus(200);
    }

    public function test2_store_new_shares()
    {
        $data = array(
        'share_name' => 'Tent',
        'share_price' => 33,
        'share_qty' => 4,
        );
        // array / string errors
        $response = $this->post('shares', $data);
        $response->assertStatus(200);
    }
}
