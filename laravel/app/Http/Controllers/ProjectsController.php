<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index(){

        $projects = Projects::latest()->paginate(10);

        return view('search', compact('projects'));
    }

    public function project_show($id){

        $project = Projects::find($id);
//        dd($project);
        return view('project', compact('project'));

    }
}
