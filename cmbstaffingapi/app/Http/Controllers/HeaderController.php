<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HeaderController extends Controller
{
    public function updateHeader(Request $request){
        $request->validate([
            'title' => 'required'
        ]);

        $title = DB::table('header_title')->update($request->all());
        return response($title, 200);
    }
}
