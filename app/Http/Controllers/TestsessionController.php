<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsessionController extends Controller
{
    //
    public function accessSessionData(Request $request){
        $sessionData = "Sin session iniciada";
        if($request->session()->has("my_name")){
            $sessionData = $request->session()->get("my_name");
        }
        echo $sessionData;
    }


    public function setSessionData(Request $request){
        $request->session()->put("my_name", "Johnatan A.");
        echo "Session Seted";
    }


    public function deleteSessionData(Request $request){
        $request->session()->forget("my_name");
        echo "Session deleted";
    }

}
