<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConnexionController extends Controller
{


   public function getData()
    {
        $projects = DB::table('projects')->select('id','name','description')->get();

        return view('databaseconnect')->with('projects', $projects);
    }
      
}
