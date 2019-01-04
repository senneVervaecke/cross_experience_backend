<?php

namespace App\Http\Controllers;

use App\Competition;
use App\FileGroup;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allCompetition(){
        return Competition::all();
    }
}
