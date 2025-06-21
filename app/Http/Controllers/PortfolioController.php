<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = json_decode(File::get(resource_path('data/skills.json')), true);
        $awards = json_decode(File::get(resource_path('data/awards.json')), true);
        $education = json_decode(File::get(resource_path('data/education.json')), true);
        $projects = json_decode(File::get(resource_path('data/projects.json')), true);
        $experience = json_decode(File::get(resource_path('data/experience.json')), true);

        return view('index', compact('skills', 'awards', 'education', 'projects', 'experience'));
    }
}
