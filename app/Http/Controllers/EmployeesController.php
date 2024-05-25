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
    public function destroy($id)
    {
        $employees = Employees::find($id);
        $employees->delete();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya dihapuskan');
    }
    public function show($id)
    {
        $employees = Employees::find($id);
        return view('employees.show', compact('employees'));
    }
    public function store(Request $request)
    {
        $employees = new Employees;
        $employees->employee_id = $request->employee_id;
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->gender = $request->gender;
        $employees->date_of_issue = $request->date_of_issue;
        $employees->save();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya ditambah');
    }
    public function edit($id)
    {
        $employees = Employees::find($id);
        return view('employees.edit', compact('employees'));
    }
    public function update(Request $request, $id)
    {
        $employees = Employees::find($id);
        $employees->employee_id = $request->employee_id;
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->gender = $request->gender;
        $employees->date_of_issue = $request->date_of_issue;
        $employees->save();
        return redirect()->route('employees.index')->with('success', 'Data pegawai berjaya dikemaskini');
    }
}
