<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FriendsController extends Controller
{
    public function create($id)
    {
        return view('friends.create', ['user' => User::findOrFail($id)]);

        //✅ create form for adding friend
        //✅ create route in user index to link to form
        //✅ insert route into user controller?
        //✅validate
        //save to db
        // extra: check for duplication
        //get tit 2 return frends of users / work on fk
//        prove friends on user model works
//        test
    }

    public function store(Request $request)
    {
        $request->validate(['new_friend_id'=>'required|integer']);
        //get first user
        $user = ['user' => 'value'];

        //get second user id
        $request->get('new_friend_id');
        //save into db in nice format

    }
}
