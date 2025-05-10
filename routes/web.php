<?php

use App\Models\jobsList;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
//jobs details

//route to home page
Route::get('/', function () {
    return view('home');
});

//route to jobs page
Route::get('/jobs', function () {
    return view('jobs',[
        "jobs" => jobsList::all()
    ]);
});

//route to specific according to id
Route::get('/jobs/{id}', function ($id)  {
    $selected_job = jobsList::find($id);
    return view('job',[
        "job" => $selected_job
    ]);
});

//route to contact page
Route::get('/contact', function () {
    return view('contact');
});

//route to about page
Route::get('/about', function () {
    return view('about');
});
