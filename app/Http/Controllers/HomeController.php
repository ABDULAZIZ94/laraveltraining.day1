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
}
