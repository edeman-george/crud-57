<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{

    // only these fields + id, updated_at & created_at can be updated in db
    protected $fillable = [
        'share_name',
        'share_price',
        'share_qty'
    ];

    public function owners() {
        return $this->belongsToMany(

            User::class
        );
    }
}
