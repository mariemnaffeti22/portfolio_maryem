<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class WelcomeController extends Controller
{
    public function __invoke()
    {
      $skills= Skill::all();
      $projects= project::all();

     return view('welcome', compact('skills','projects'));
    }
}
