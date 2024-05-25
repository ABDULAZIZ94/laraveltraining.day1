<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesController;
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

Route::view('/', "index");

Route::group(['prefix'=>'employees'], function(){
    Route::get('/', [EmployeesController::class, 'index'])->name('employees.index');
    Route::get('/show/{id}', [EmployeesController::class, 'show'])->name('employees.show');
    Route::view('/create', 'employees.create')->name('employees.create');
    Route::post('/store', [EmployeesController::class, 'store'])->name('employees.store');
    Route::put('/update', [EmployeesController::class, 'update'])->name('employees.put');
    Route::patch('/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
    Route::delete('/destroy', [EmployeesController::class, 'destroy'])->name('employees.destroy');
});

// Route::get('/employee/{id}', [HomeController::class, 'showEmployees']);
// Route::post('/employee/store', [HomeController::class, 'saveEmployee'])->name('employee.store');

// Route::view('employee.index', 'employee.index',['employees_ary'=>$employees_ary])->name('employee.index'); // will error variable not found

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

Route::group(['prefix'=>'method'], function(){
    Route::get('/', [MethodSpoofingController::class, 'index'])->name('forms.index');
    Route::post('/spoof', [MethodSpoofingController::class, 'store'])->name('forms.store');
    Route::put('/spoof', [MethodSpoofingController::class, 'update'])->name('forms.update');
    Route::patch('/spoof', [MethodSpoofingController::class, 'modify'])->name('forms.modify');
    Route::delete('/spoof', [MethodSpoofingController::class, 'destroy'])->name('forms.destroy');
    Route::get('/spoof', [MethodSpoofingController::class, 'show'])->name('forms.show');
});


