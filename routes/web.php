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
    Route::post('/update', [EmployeesController::class, 'update'])->name('employees.put');
    Route::post('/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
    Route::post('/destroy', [EmployeesController::class, 'destroy'])->name('employees.destroy');
});

// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });

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
    //function module index page
    Route::get('/', [MethodSpoofingController::class, 'index'])->name('forms.index');
    //frontend view
    Route::view('/create', 'forms.create')->name('forms.create');
    Route::view('/show', 'forms.show')->name('forms.show');
    Route::view('/put', 'forms.put')->name('forms.put');
    Route::view('/delete', 'forms.delete')->name('forms.delete');
    Route::view('/patch', 'forms.patch')->name('forms.patch');
    //backend controller function
    Route::post('/spoof', [MethodSpoofingController::class, 'store'])->name('spoof.store');
    Route::get('/spoof', [MethodSpoofingController::class, 'show'])->name('spoof.show');
    Route::put('/spoof', [MethodSpoofingController::class, 'update'])->name('spoof.update');
    Route::patch('/spoof', [MethodSpoofingController::class, 'modify'])->name('spoof.modify');
    Route::delete('/spoof', [MethodSpoofingController::class, 'destroy'])->name('spoof.destroy');
});


