<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Incidence;
use App\Models\Activity;

class PruebasController extends Controller
{
   public function testOrm(){
        $incidences = Incidence::all();

        foreach($incidences as $incidence) {
            echo "<h1>".$incidence->title."</h1>";
            echo "<h3 style='color:red;'>User: {$incidence->user->id} -<span style='color:blue;'> {$incidence->activity->name}</span></h3>";
            echo "<h2>".$incidence->content."</h2>";
            echo "<hr>";
        }

    
    die();
   }
}
