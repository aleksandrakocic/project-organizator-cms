<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    // DISPLAY ALL TASKS = ADD NEW TASK
    // Task - CLASS IN CORE>TASKS.PHP
    // JEL TAKO PRAVIM ZA SVAKU TABELU

    public function home()
    {
        $projects = App::get('database')->getAll("projects");
        return view('index', compact('projects'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function storeTask()
    {
        App::get('database')->addNew("tasks", $_POST);
        return redirect('/');
    }

    public function projects()
    {
        $projects = App::get('database')->getAll("projects");
        return view('projects', compact('projects'));
    }

    public function teams() 
    {
        $teams = App::get('database')->getAll("teams");
        return view('teams', compact('teams'));
    }


    public function users()
    {
        $users = App::get('database')->getAll("users");
        return view('users', compact('users'));
    }
}

?>