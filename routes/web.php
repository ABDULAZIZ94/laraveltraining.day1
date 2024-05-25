<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MethodSpoofing;
use App\Http\Controllers\MethodSpoofingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/employee/{id}', [HomeController::class, 'showEmployees']);

// Route::get('profile', function () {
//     // Only authenticated users may enter...
// })->middleware('auth');

Route::view('login', 'auth.login')->name('login');
Route::view('login2', 'auth.login',['name'=>'Laravel', 'age'=>20])->name('login2');

// Route::group(['middleware' => ['auth', 'checkAge']], function () {
//     Route::get('/', function () {
//         // Uses Auth and CheckAge middleware...
//     });

//     Route::get('admin/profile', function () {
//         // Uses Auth and CheckAge middleware...
//     });
// });


// Route::put('/post/{id}', function (string $id) {
//     // ...
// })->middleware('role:editor');

Route::post('/employee/store', [HomeController::class, 'saveEmployee'])->name('employee.store');

// Route::view('employee.index', 'employee.index',['employees_ary'=>$employees_ary])->name('employee.index'); // will error variable not found

Route::group(['prefix'=>'method'], function(){
    Route::get('/', [MethodSpoofingController::class, 'index'])->name('index');
});


