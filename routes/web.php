<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
//jobs details
class jobs
{
    static $jobs = [
        [
            "id" => 1,
            "company" => "Colan InfoTech",
            "position" => "PHP Developer",
            "salary" => "30,000",
            "email" => "Colon.tech@gmail.com",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sapiente nesciunt perferendis optio vero quidem ducimus libero voluptatem laboriosam nisi architecto nostrum voluptatibus consectetur, quas et aperiam fugiat minima numquam ipsum at. Ipsa veniam beatae odio natus quas expedita accusamus, assumenda recusandae delectus minima voluptates, veritatis dolorem sed dolore incidunt."
        ],
        [
            "id" => 2,
            "company" => "Colan InfoTech",
            "position" => "Flutter Developer",
            "salary" => "25,000",
            "email" => "Colon.tech@gmail.com",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sapiente nesciunt perferendis optio vero quidem ducimus libero voluptatem laboriosam nisi architecto nostrum voluptatibus consectetur, quas et aperiam fugiat minima numquam ipsum at. Ipsa veniam beatae odio natus quas expedita accusamus, assumenda recusandae delectus minima voluptates, veritatis dolorem sed dolore incidunt."
        ],
        [
            "id" => 3,
            "company" => "Novac Technology",
            "position" => "Software Engineer",
            "salary" => "$40,000",
            "email" => "Colon.tech@gmail.com",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sapiente nesciunt perferendis optio vero quidem ducimus libero voluptatem laboriosam nisi architecto nostrum voluptatibus consectetur, quas et aperiam fugiat minima numquam ipsum at. Ipsa veniam beatae odio natus quas expedita accusamus, assumenda recusandae delectus minima voluptates, veritatis dolorem sed dolore incidunt."
        ],
        [
            "id" => 4,
            "company" => "Novac Technology",
            "position" => "AML Engineer",
            "salary" => "$70,000",
            "email" => "Novac.tech@gmail.com",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sapiente nesciunt perferendis optio vero quidem ducimus libero voluptatem laboriosam nisi architecto nostrum voluptatibus consectetur, quas et aperiam fugiat minima numquam ipsum at. Ipsa veniam beatae odio natus quas expedita accusamus, assumenda recusandae delectus minima voluptates, veritatis dolorem sed dolore incidunt."
        ]
    ];

    static function findJob($id):array{
        return Arr::first(static::$jobs,
        fn($job) => $job["id"] == $id
        );
    }
}

//route to home page
Route::get('/', function () {
    return view('home');
});

//route to jobs page
Route::get('/jobs', function () {
    return view('jobs',[
        "jobs" => jobs::$jobs
    ]);
});

//route to specific according to id
Route::get('/jobs/{id}', function ($id)  {
    $selected_job = jobs::findJob($id);
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
