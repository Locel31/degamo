<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\degamo;
use App\Http\Controllers\maincontroller;

class mainService extends Controller
{
    public static function getname(){
        return degamo::all();
    }
    public static function addname(Request $request){
        $names =new degamo(); 
        $names ->name = $request->name; 
        $names ->last = $request->last; 

        $names->save();

        return degamo::all();
    }
    public static function updatename(Request $request){
        $names = degamo::find($request->id); 
        $names ->name = $request->name; 
        $names ->last = $request->last; 

        $names->save();

        return degamo::all();
    }
    public static function deletename(Request $request){
        $names = degamo::find($request->id); 
        
        $names->delete();

        return degamo::all();
    }
}
