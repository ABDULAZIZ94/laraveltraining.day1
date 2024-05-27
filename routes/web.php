<?php

use App\Http\Controllers\AdvancedController;
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

Route::view('/', "index")->name('index');

Route::view('/internal', 'internal.index')->name('internal.index')->middleware('auth');
Route::view('/bypass', 'internal.index')->name('internal.bypass');

//contoh crud yang biasa
Route::group(['prefix'=>'employees'], function(){
    Route::view('/create', 'employees.create')->name('employees.create');
    Route::get('/edit/{emp_no}', [EmployeesController::class, 'edit'])->name('employees.edit');

    Route::get('/', [EmployeesController::class, 'index'])->name('employees.index');
    Route::get('/show/{emp_no}', [EmployeesController::class, 'show'])->name('employees.show');
    Route::post('/update/{emp_no}', [EmployeesController::class, 'update'])->name('employees.update');
    Route::post('/store', [EmployeesController::class, 'store'])->name('employees.store');
    Route::post('/destroy/{emp_no}', [EmployeesController::class, 'destroy'])->name('employees.destroy');
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

//contoh custom middleware
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

//contoh 5 http request method
Route::group(['prefix'=>'method'], function(){
    //function module index page
    Route::get('/', [MethodSpoofingController::class, 'index'])->name('forms.index');
    //frontend view
    Route::view('/create', 'forms.create')->name('forms.create');
    Route::view('/show', 'forms.show')->name('forms.show');
    Route::get('/put/{dept_no}', [MethodSpoofingController::class, 'forms_put'])->name('forms.put');
    Route::view('/delete', 'forms.delete')->name('forms.delete');
    Route::get('/patch/{dept_no}', [MethodSpoofingController::class, 'forms_patch'])->name('forms.patch');
    //backend controller function
    Route::post('/spoof', [MethodSpoofingController::class, 'create'])->name('spoof.create');
    Route::put('/spoof/{dept_no}', [MethodSpoofingController::class, 'put'])->name('spoof.put');
    Route::patch('/spoof/{dept_no}', [MethodSpoofingController::class, 'patch'])->name('spoof.patch');
    Route::delete('/spoof/{dept_no}', [MethodSpoofingController::class, 'destroy'])->name('spoof.delete');
});

Route::prefix('advanced')->group(function () {
    Route::view('/','advanced.index')->name('advanced.index');
    Route::view('/ajax', 'advanced.ajax')->name('advanced.ajax');
    Route::view('/datatable', 'advanced.ajax')->name('advanced.datatable');
    Route::view('/middleware', 'advanced.middleware')->name('advanced.middleware');
    Route::view('/relations', 'advanced.relations')->name('advanced.relations');
    Route::view('/requestparameter', 'advanced.requestparameter')->name('advanced.requestparameter');

    // Route::get('/', [AdvancedController::class, 'index'])->name('advanced.index');
    Route::get('/relrec1', [AdvancedController::class, 'relrec1'])->name('advanced.relrec1');
    Route::get('/relrec2', [AdvancedController::class, 'relrec2'])->name('advanced.relrec2');
    Route::post('/umur', [AdvancedController::class, 'umur'])->name('advanced.umur')->middleware('checkAge');
    Route::get('/seniorcitizen', [AdvancedController::class, 'seniorcitizen'])->name('advanced.seniorcitizen');
    Route::get('/rel1', [AdvancedController::class, 'rel1'])->name('advanced.rel1');
    Route::get('/join1', [AdvancedController::class, 'join1'])->name('advanced.join1');
});

