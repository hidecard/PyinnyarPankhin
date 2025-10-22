<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::with('department')->get();
        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.majors.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'major_name' => 'required|string|max:255',
            'department_id' => 'required|exists:department,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Major::create($request->only(['major_name', 'department_id']));

        return redirect()->route('admin.majors.index')
            ->with('success', 'Major created successfully.');
    }

    public function show(Major $major)
    {
        $major->load('department', 'degrees');
        return view('admin.majors.show', compact('major'));
    }

    public function edit(Major $major)
    {
        $departments = Department::all();
        return view('admin.majors.edit', compact('major', 'departments'));
    }

    public function update(Request $request, Major $major)
    {
        $validator = Validator::make($request->all(), [
            'major_name' => 'required|string|max:255',
            'department_id' => 'required|exists:department,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $major->update($request->only(['major_name', 'department_id']));

        return redirect()->route('admin.majors.index')
            ->with('success', 'Major updated successfully.');
    }

    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('admin.majors.index')
            ->with('success', 'Major deleted successfully.');
    }
}
