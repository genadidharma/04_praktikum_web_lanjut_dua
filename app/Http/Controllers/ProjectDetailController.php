<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    public function index($slug)
    {
        return view('projectDetail', ['project' => Project::getProjectBySlug($slug)]);
    }
}
