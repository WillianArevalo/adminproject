<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function create()
    {
        $languages = Language::all();
        return view("projects.new", ["languages" => $languages]);
    }

    public function store(ProjectRequest $request)
    {
    }
}
