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
}
