<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class MethodSpoofingController extends Controller
{
    public function index()
    {
        $department = Department::paginate(10); // Menggunakan pagination untuk mengambil 10 rekod
        return view('forms.index', compact('department'));
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $department = new Department;
        $department->softDeleteEmployee($request->id);
        return redirect()->route('forms.index')->with('success', 'Data department berjaya dihapuskan');
    }
    public function show($id)
    {
        $department = Department::find($id);
        return view('forms.show', compact('department'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $department = new Department;
        $department->dept_no = $request->dept_no;
        $department->dept_name = $request->dept_name;
        $department->save();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya ditambah');
    }
    public function edit($id)
    {
        $department = Department::find($id);
        return view('forms.edit', compact('department'));
    }
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->dept_no = $request->dept_no;
        $department->dept_name = $request->dept_name;
        $department->save();
        return redirect()->route('forms.index')->with('success', 'Data department berjaya dikemaskini');
    }
}
