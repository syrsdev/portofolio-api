<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use App\Http\Resources\EducationResource;
use App\Http\Resources\ExperienceResource;
use App\Models\About;
use App\Models\Educations;
use App\Models\experience;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::pluck('about')->first();
        $education = Educations::all();
        $experience = experience::with('status:id,title')->get();
        $data = [
            'about' => $about,
            'education' => EducationResource::collection($education),
            'experience' => ExperienceResource::collection($experience),
        ];

        return response()->json(['data' => $data]);
    }
}