<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File as FacadesFile;

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
   
// Route::get('hello', function () {
//     return view('layouts.main');
// });
// Route::get('hello/student', function () {
//     return view('student');
// });
// Route::get('hello/class', function () {
//     return view('class');
// });

// Route::get('posts/{post}',function($slug){
//     return view('post', [
//         'post' => Post::find($slug)
//     ]);

// Route::get('admin/dashboard/student',   [TestController::class, 'student']);

// Route::resource('products',ProductController::class);

// Route::get('/test',[ProductController::class,'Test']);

// Route::get('/add', [StudentController::class, 'add']);

// Route::get('add-teacher', [TeacherController::class, 'addTeacher']);

// Route::get('add-subject/{id}', [TeacherController::class, 'addSubject']);

// Route::get('get-subject-by-teacher/{id}', [TeacherController::class, 'getSubjectByTeacherId']);


Route::resource('student', StudentController::class);

Route::resource('profile', ProfileController::class);

Route::resource('book', BookController::class);

