<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandingController extends Controller
{
    public function branding(){

        $branding = DB::table('branding')->get()->first();

        return response($branding, 200);
    }
}
