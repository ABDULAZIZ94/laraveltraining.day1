<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employees;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function findDepartmentByName(Request $request)
    {
        $deptName = $request->input('dept_name');
        $department = Department::where('dept_name', $deptName)->first();

        return response()->json($department);
    }

    public function showEmployees($id)
    {
        $employee = Employees::find($id);
        return view('employee', ['employee' => $employee]);
    }

    public function saveEmployee(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'position' => 'required|max:255',
            'salary' => 'required|numeric'
        ]);

        Employees::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Pekerja telah disimpan.');
    }

}
