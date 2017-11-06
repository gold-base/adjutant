<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Uuid;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        // return view('user.profile', ['user' => User::findOrFail($id)]);
        return Uuid::generate();
    }
}
