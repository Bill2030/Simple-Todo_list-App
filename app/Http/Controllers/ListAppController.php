<?php

namespace App\Http\Controllers;

use App\Models\Applist;
use Illuminate\Http\Request;

class ListAppController extends Controller
{
    public function home()
    {
        $applist = Applist::all();


        return view("home",compact("applist"));
    }

    public function create(Request $request)
    {
        $incomingFields= $request->validate([
            "name"=> "required",
            "description"=> "required",
            "action"=>"required"
        ]);

        $incomingFields["name"]=$request->name;
        $incomingFields["description"]=$request->description;
        $incomingFields["action"]=$request->action;

        Applist::create($incomingFields);
        return redirect()->back()->with("success","");
    }
  

}
