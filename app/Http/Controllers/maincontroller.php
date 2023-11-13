<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\mainService;

class maincontroller extends Controller
{
    public static function getname(){
        return mainService::getname();
    }
    public static function addname(Request $request){
        return mainService::addname($request);
    }
    
    public static function updatename(Request $request){
        return mainService::updatename($request);
    }
    
    public static function deletename(Request $request){
        return mainService::deletename($request);
    }
}
