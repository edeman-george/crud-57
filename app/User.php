<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Share;
class User extends Model
{

    //default values
    protected $attributes = [
        'company' => 'HSBC',
        'friends' => null,
    ];

    // only these fields + id, updated_at & created_at can be updated in db
    protected $fillable = [
        'name',
        'age',
        'company',
    ];


    public function accountant()
    {
        return $this->belongsTo(Accountant::class);
    }
    /**
     * The investments that belong to the user.
     */
    public function investments() {
        return $this->belongsToMany(

            Share::class
//            'share_user', 'id', 'id'
        );
    }

}
