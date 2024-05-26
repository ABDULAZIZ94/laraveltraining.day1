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
        return view('advanced.index');
    }

    // public function join1($id)
    // {
    //     $employees = Dep_Emp::join('employees', 'dept_emp.emp_no', '=', 'employees.emp_no')
    //     ->join('departments', 'dept_emp.dept_no', '=', 'departments.dept_no')
    //     ->select('employees.emp_no', 'employees.first_name', 'employees.last_name', 'departments.dept_name')
    //     ->get();
    //     dd($employees);
    //     return view('advanced.index', compact('employees'));
    // }

    public function rel1(){
        $dep_emp = Dep_Emp::get();
        // dd($dep_emp);
        return response()->json($dep_emp);
    }

    public function rel2(){
        $dep_emp = Dep_Emp::get();
        // dd($dep_emp);
        return view('advanced.index', compact('dep_emp'));
    }

    public function rel3(){
        // $employees = Employees::with('departments')->get();
        // dd($employees);
        // return view('advanced.index', compact('employees'));
    }

    public function rel4(){
        // $employees = Employees::with('departments')->get();
        // dd($employees);
        // return view('advanced.index', compact('employees'));
    }
}