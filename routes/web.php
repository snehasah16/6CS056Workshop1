
<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


// HOME PAGE

Route::get('/', function () {
    return redirect()->route('students.index');
});


// STUDENT RESOURCE ROUTES

Route::resource('students', StudentController::class);


// COURSE RESOURCE ROUTES

Route::resource('courses', CourseController::class);
