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

    public function insertProject() {
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

    public function updateProject() {
        $project = Project::where('is_active', 1)
            ->where('city_id', 3)
            ->update(['execution_date' => '2020-02-03']);

        return $project;
    }

    public function updateAllInactiveProjects() {
        $project = Project::where('is_active', 0)
            ->update(['name' => 'Proyectos no activos']);

        return "Projects updated";
    }

    public function deleteProjects() {
        $project = Project::where('id', '>', 15)->delete();

        return "Projects deleted";
    }

    public function deleteFirstTenProjects() {
        $projects = Project::take(10)->delete();

        return "Projects deleted";
    }
}
