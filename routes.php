<?php

// routes for main navigation

$router->get('', 'PagesController@home');
// vraca index -- all projects


$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');
// # WORKING JUST STYLE IT A BIT
$router->get('projects', 'PagesController@projects');


// adding task to database
// $router->post('task/add', 'PagesController@storeTask');

// routes for users
// ~? SOME ROUTES MAYBE WITHOUT /ADMIN 
// EXAMPLE : just /login
// WORKS IN BOTH WAYS
$router->get('admin/login', "Authenticate@login");

//SIGNUP WORKING
//CORRECT SENDING DATA TO THE DATABASE - USERS-TABLE

// SET TO CHOOSE IF THIS IS PROJECT MANAGER OR JUST EMPLOYEE
$router->get('admin/signup', "Authenticate@signup");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);


//ROUTES FOR UNREGISTERED USERS
// GOES WITHOUT ADMIN

$router->get('admin/projects', "ProjectsController@index", true);


// ROUTES FOR REGISTERED USERS

// to create new projects
// $router->get('admin/projects', "ProjectsController@index", true);

$router->get('admin/projects/create', "ProjectsController@create", true);
$router->post('admin/projects', "ProjectsController@store", true);
$router->get('admin/projects/show', "ProjectsController@show", true);
$router->get('admin/projects/edit', "ProjectsController@edit", true);
$router->post('admin/projects/update', "ProjectsController@update", true);
$router->post('admin/projects/destroy', "ProjectsController@destroy", true);

//ADD SAME ROUTES FOR TEAMS


?>

