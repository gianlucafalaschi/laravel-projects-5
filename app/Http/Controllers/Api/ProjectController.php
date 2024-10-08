<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; // importo il model Project

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::with('type', 'technologies')->get();
        //dd($projects);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
