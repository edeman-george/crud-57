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

    //belongs to: when model table has related class id on it
    //has one/many: when model is referred to on related table e.g. team table > user_id column
    public function team() {
        return $this->hasOne(Team::class);
    }

    public function followersChild() {
        return $this->belongsToMany(
            self::class, 'followers', 'friend_id', 'user_id'
        );
    }

}
