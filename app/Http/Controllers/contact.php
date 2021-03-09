<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{

    
    public function from(Request $request){
        ddd($request->all());
    }
}
