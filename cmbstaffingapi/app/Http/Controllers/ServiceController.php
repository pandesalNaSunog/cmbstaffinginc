<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function createService(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $service = DB::table('services')->insert($request->all());
        return response($service, 200);
    }

    public function getServices(){
        $services = DB::table('services')->get();

        return response($services, 200);
    }
}
