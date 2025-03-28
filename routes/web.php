<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;



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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
// route for opening up the review page to write
Route::get('/write-review', [HomeController::class, 'writeReview'])->name('reviews.create');


// route for storing the review
Route::post('/write-review', [ReviewController::class, 'store'])->name('reviews.store');


Route::get('/about-us', [HomeController::class, 'getAbout'])->name('about');

Route::get('/academics', [HomeController::class, 'getAcademics'])->name('academics');

Route::get('/students-list', [StudentController::class, 'studentGrades'])->name('students.grades');


Route::get('/teacher', [HomeController::class, 'getteacher'])->name('teacher');

Route::get('/contact-us', [HomeController::class, 'getContact'])->name('contact');


//Route for admin user creation

Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


//admin routes 
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.index');

//Route for managing the students
Route::get('/admin/view-students', [StudentController::class, 'index'])->name('students.index');
Route::get('/admin/Add-students', [StudentController::class, 'create'])->name('students.create');
Route::post('/admin/store-students', [StudentController::class,'store'])->name('students.store');
Route::get('/admin/edit-students/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/admin/update-students/{id}', [StudentController::class, 'update'])->name('students.update');

// Route::get('/director-profiles/{id}/edit', [DirectorProfilesController::class, 'edit'])->name('director_profiles.edit');
// Route::put('/director-profiles/{id}', [DirectorProfilesController::class, 'update'])->name('director_profiles.update');

Route::delete('/admin/delete-students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

//Route for managing the teachers

Route::get('/admin/view-teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/admin/add-teachers', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/admin/store-teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/admin/edit-teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/admin/update-teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/admin/delete-teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

//Route for the gallery images
Route::get('/admin/view-gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/admin/add-gallery', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/admin/store-gallery', [GalleryController::class,'store'])->name('gallery.store');
Route::get('gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/admin/delete-gallery/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');


//logout
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->name('admin.logout');