<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
//        $friends = $users->friends();
//        $userFriends = $users->friends();

        foreach ($users as $user) {
        $user->friends = $user->userFriends();
//        $user->friends = ($user->friends());
        }
//        var_dump($users);
        return view('users.index', compact('users', $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allUsers = new User();
        $msg = $allUsers->successMessage();
        $request->validate([
            'name' => 'required|string|min:2|max:70',
            'age' => 'numeric|max:99',
            'company' => 'string',
        ]);
        $user = new User([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'company' => $request->get('company'),
        ]);
        $user->save();
        return redirect('/users')->with('success', $msg );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
