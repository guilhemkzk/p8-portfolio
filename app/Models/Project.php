<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    
   public function getAllProjects()
   {
       return $projects = DB::table('projects')->select('id','name','description')->get();

   }

   public static function find($id) {
    $projects = self::all();


    foreach($projects as $project) {
        if ($project['id'] == $id) {

            return $project;
        }
    }
   }
}
