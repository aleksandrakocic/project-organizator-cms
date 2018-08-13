<?php

namespace App\Controllers;

use App\Core\App;

class ProjectsController
{
    public function index()
    {
        $projects = App::get('database')->getAll("projects");
        $teams = App::get('database')->getAll('teams');
        return view('projects.index', compact('projects', 'teams'));

    }

    public function create()
    {   
        $teams = App::get('database')->getAll("teams");
        return view('projects.create', compact('teams'));
    }

    public function store()
    {
        App::get('database')->addNew('projects', $_POST);
        return redirect('/admin/projects');
    }

    public function show()
    {
        $project = App::get('database')->getOne('projects', $_GET['id']);
        return view('projects.show', compact('project'));
    }
    public function edit()
    {
        $teams = App::get('database')->getAll("teams");
        $project = App::get('database')->getOne('projects', $_GET['id']);
        return view('projects.edit', compact('project', 'teams'));
    }
    public function update()
    {
        App::get('database')->update('projects', $_POST);
        return redirect('/admin/projects');
    }
    public function destroy()
    {
        App::get('database')->destroy('projects', $_POST['id']);
        return redirect('/admin/projects');
    }
}
?>

 
