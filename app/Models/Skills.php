<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skills extends Model
{
    use HasFactory;
    
   public function getAllSkills()
   {
       return $skills = DB::table('skills')->select('id','name','url')->get();

   }

}