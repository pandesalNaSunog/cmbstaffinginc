<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandingController extends Controller
{
    public function branding(){

        $branding = DB::table('branding')->get();

        return response($branding, 200);
    }

    public function changeBrandingName(Request $request){
        $request->validate([
            'branding_name' => 'required'
        ]);

        $brandingName = DB::table('branding')->update($request->all());
        return response($brandingName, 200);
    }
}
