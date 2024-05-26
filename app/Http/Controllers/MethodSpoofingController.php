<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class MethodSpoofingController extends Controller
{
    public function index()
    {
        $departments = Department::paginate(10); // Menggunakan pagination untuk mengambil 10 rekod
        // dd($departments);
        return view('forms.index', compact('departments'));
    }
    public function forms_put(Request $request, $dept_no)
    {
        $department = Department::find($dept_no);
        return view('forms.put', compact('department'));
    }
    public function forms_patch(Request $request, $dept_no)
    {
        $department = Department::find($dept_no);
        return view('forms.patch', compact('department'));
    }
    public function destroy(Request $request, $dept_no)
    {
        // dd($request,$dept_no);
        $department = Department::find($dept_no);
        $department->delete();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya dihapuskan');
    }
    public function create(Request $request)
    {
        // dd($request);
        $department = new Department;
        $department->dept_no = $request->dept_no;
        $department->dept_name = $request->dept_name;
        $department->save();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya ditambah');
    }
    public function put(Request $request, $dept_no)
    {
        // dd($request, $dept_no);
        $department = Department::find($dept_no);
        $department->dept_no = $request->dept_no;
        $department->dept_name = $request->dept_name;
        // dd($request, $dept_no, $department);
        $department->save();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya dikemaskini melalui method put');
    }
    public function patch(Request $request, $dept_no)
    {
        // dd($request, $dept_no);
        $department = Department::find($dept_no);
        $department->dept_no = $request->dept_no;
        $department->dept_name = $request->dept_name;
        // dd($request, $dept_no, $department);
        $department->save();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya dikemaskini melalui method patch');
    }
}
