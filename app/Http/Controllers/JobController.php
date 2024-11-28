<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = "cili was here";
        $jobs = [
            "webdeveloper",
            'tyúk engineer',
            "software engineer",
            "system analyst"
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(string $id)
    {
        return "Showing job $id";
    }
}
