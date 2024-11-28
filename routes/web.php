<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::get('/', [HomeController::class, 'index']);


/* 
Route::post('/submit', function () {
    return 'submit';
});


Route::get('/posts/{id}', function (string $id) {
    return  'Post' . $id;
}); */

/* Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header()

    ];
}); */
/* 
Route::get("/users", function (Request $request) {
    return $request->only(['name', 'pet']);
});


Route::get('/test', function () {
    return response()->json(['name' => 'Cili']);
});
 */