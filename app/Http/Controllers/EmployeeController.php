<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show($id)
    {
        $employee = Employees::find($id);
        return view('employee', ['employee' => $employee]);
    }
}