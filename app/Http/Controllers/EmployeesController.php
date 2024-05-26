<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    //
    public function index(){
        $employees = Employees::paginate(10); // Menggunakan pagination untuk mengambil 10 rekod
        return view('employees.index', compact('employees'));
    }
    public function destroy(Request $request, $emp_no)
    {
        // dd($request, $emp_no);
        $employees = new Employees;
        $employees->softDeleteEmployee($emp_no);
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya dihapuskan');
    }
    public function show($emp_no)
    {
        $employees = Employees::find($emp_no);
        return view('employees.show', compact('employees'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $employees = new Employees; 
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->gender = $request->gender;
        $employees->hire_date = $request->hire_date;
        $employees->save();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya ditambah');
    }
    public function edit($emp_no)
    {
        $employee = Employees::find($emp_no);
        return view('employees.edit', compact('employee'));
    }
    public function update(Request $request, $emp_no)
    {
        $employees = Employees::find($emp_no);
        $employees->emp_no = $request->emp_no;
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->gender = $request->gender;
        $employees->hire_date = $request->hire_date;
        $employees->save();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya dikemaskini');
    }
}
