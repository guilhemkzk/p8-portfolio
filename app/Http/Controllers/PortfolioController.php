<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('index', compact('projects'));
    }

    public function findOne($id){
        return view('project', [
            'project' => Project::find($id)
        ]);
    }

}