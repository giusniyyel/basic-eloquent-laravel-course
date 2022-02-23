<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getAllProjects() {
        $projects = Project::all();
        return $projects;
    }

    public function insertProject(){
        $project = Project::create([
            'city_id' => 1,
            'company_id' => 1,
            'user_id' => 1,
            'name' => 'Project Name',
            'execution_date' => '2020-04-30',
            'is_active' => 1
        ]);

        return $project;
    }
}
