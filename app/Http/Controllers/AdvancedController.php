<?php

namespace App\Http\Controllers;

use App\Models\Dep_Emp;
use App\Models\Employees;
use Illuminate\Http\Request;

class AdvancedController extends Controller
{
    //
    public function index()
    {
        $employees = Dep_Emp::with('departments')->get();
        dd($employees);
        return view('advanced.index', compact('employees'));
    }
}
