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
        $validatedData = $request->validate([
            'emp_no' => 'required|integer',
            'first_name' => 'required|string|max:14', // Diubah dari max:255 ke max:14
            'last_name' => 'required|string|max:16', // Diubah dari max:255 ke max:16
            'gender' => 'required|in:M,F',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date'
        ]);

        $employees = new Employees; 
        $employees->emp_no = $validatedData['emp_no'];
        $employees->first_name = $validatedData['first_name'];
        $employees->last_name = $validatedData['last_name'];
        $employees->gender = $validatedData['gender'];
        $employees->birth_date = $validatedData['birth_date'];
        $employees->hire_date = $validatedData['hire_date'];
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
        $validatedData = $request->validate([
            'emp_no' => 'required|integer',
            'first_name' => 'required|string|max:14', // Diubah dari max:255 ke max:14
            'last_name' => 'required|string|max:16', // Diubah dari max:255 ke max:16
            'gender' => 'required|in:M,F',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date'
        ]);

        $employees = Employees::find($emp_no);
        $employees->emp_no = $validatedData['emp_no'];
        $employees->first_name = $validatedData['first_name'];
        $employees->last_name = $validatedData['last_name'];
        $employees->gender = $validatedData['gender'];
        $employees->birth_date = $validatedData['birth_date'];
        $employees->hire_date = $validatedData['hire_date'];
        $employees->save();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya dikemaskini');
    }
}
