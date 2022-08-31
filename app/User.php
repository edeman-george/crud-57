<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function successMessage(): string
    {
        return "successful";
    }

    //    Roles that belong to the user
    public function userFriends() {
        return serialize($this->belongsToMany(User::class,
            'friends', 'id', 'user_id'
        )->withPivot( 'friend_id')->orderBy('user_id', 'desc')
        );
    }

    //    Attempt 2: Roles that belong to the user
    public function friends() {
        return ($this->belongsToMany(User::class,
            'friends', 'id', 'user_id','user_id')
        );
    }


}
