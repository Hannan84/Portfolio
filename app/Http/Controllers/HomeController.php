<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {// invoke function to make the controller invokable
        $projects = Project::all();
        return view('home.home',compact('projects'));
    }


}
