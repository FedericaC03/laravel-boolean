<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class projectcontroller extends Controller
{
    public function index() {
        $projects = project::all();

        return view("index", ["projects" => $projects]);
    }
}
