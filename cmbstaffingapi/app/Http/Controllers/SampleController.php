<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SampleController extends Controller
{
    public function sample(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($request->all());
        return response($user, 200);
    }
}
