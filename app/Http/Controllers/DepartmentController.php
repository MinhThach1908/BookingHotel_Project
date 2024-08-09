<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'detail' => 'nullable|string|max:255',
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index')->with('Success', 'Department created successfully.');
    }

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'detail' => 'nullable|string|max:255',
        ]);

        $department->update($request->all());
        return redirect()->route('departments.index')->with('Success', 'Department updated successfully.');
    }

    public function destroy(int $id)
    {
        Department::where('id', $id)->delete();
        return redirect()->route('departments.index')->with('Success', 'Department deleted successfully.');
    }

    public function deleteALl(Request $request)
    {
        $ids=$request->ids;
        Department::whereIn('id', $ids)->delete();
        return response()->json(['Success'=>"Deleted successfully."]);
    }
}
