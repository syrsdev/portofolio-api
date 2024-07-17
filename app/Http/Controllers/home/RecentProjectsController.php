<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecentProjectsRequest;
use App\Http\Resources\RecentProjectsResource;
use App\Models\Projects;

class RecentProjectsController extends Controller
{
    public function index()
    {
        $recentProjects = Projects::with(['projectSkills:project_id,skill_id', 'projectSkills.skill:id,image'])->latest()->limit(3)->get();

        // return response()->json(['data' => $recentProjects]);
        return RecentProjectsResource::collection($recentProjects);
    }
}
