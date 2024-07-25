<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectsResource;
use App\Models\Projects;
use Illuminate\Http\Request;

class AllProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::with(['projectSkills:project_id,skill_id', 'projectSkills.skill:id,image'])->latest()->get();
        return ProjectsResource::collection($projects);
    }
}
