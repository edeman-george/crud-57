<?php

namespace Tests;

use App\Share;
use PHPUnit\Framework\TestCase;

class ShareTest extends TestCase
{

    public function testCreateAShare() {
        $share = new Share([
            'share_name' => 'Asda',
            'share_price' => 100,
            'share_qty' => 3,
        ]);
        $this->assertInstanceOf(Share::class, $share);
    }

}
