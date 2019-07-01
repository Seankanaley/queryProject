<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	// dd(app('foo'));
    return view('welcome');
});

/*
	GET /projects (index)

	GET /projects/create (create)

	GET /projects/1 (show)

	POST /projects (store)

	GET /projects/1/edit (edit)

	PATCH/UPDATE /projects/1 (update)

	DELETE /projects/1 (destroy)

*/


	Route::resource('projects', 'ProjectsController');

	Route::patch('/tasks/{task}', 'ProjectTasksController@update');

	Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

	Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

	Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
	//code line above, and routes below are effectively the same.


// Route::get('/projects', 'ProjectsController@index');

// Route::get('/projects/create', 'ProjectsController@create');

// Route::get('projects/{project}', 'ProjectsController@show' );

// Route::post('/projects', 'ProjectsController@store');

// Route::get('projects/{project}/edit', 'ProjectsController@edit');

// Route::patch('projects/{project}', 'ProjectsController@update');

// Route::delete('projects/{project}', 'ProjectsController@destroy');


