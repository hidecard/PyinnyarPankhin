<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Department;
use App\Models\Degree;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::with('department')->get();
        return view('admin.admissions.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.admissions.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'admissions_name' => 'required|string|max:30',
            'email' => 'required|email|unique:admissions,email',
            'phone' => 'required|string|max:20',
            'department_id' => 'required|exists:department,id',
            'minimum_gpa' => 'required|integer',
            'transcripts' => 'required|string|max:30',
            'recommendation' => 'required|integer',
            'edu_degree' => 'required|string|max:30',
            'sop' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Admission::create($request->all());

        return redirect()->route('admin.admissions.index')
            ->with('success', 'Admission application submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        $admission->load('department');
        return view('admin.admissions.show', compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        $departments = Department::all();
        return view('admin.admissions.edit', compact('admission', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission $admission)
    {
        $validator = Validator::make($request->all(), [
            'admissions_name' => 'required|string|max:30',
            'email' => 'required|email|unique:admissions,email,' . $admission->id,
            'phone' => 'required|string|max:20',
            'department_id' => 'required|exists:department,id',
            'minimum_gpa' => 'required|integer',
            'transcripts' => 'required|string|max:30',
            'recommendation' => 'required|integer',
            'edu_degree' => 'required|string|max:30',
            'sop' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $admission->update($request->all());

        return redirect()->route('admin.admissions.index')
            ->with('success', 'Admission application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();

        return redirect()->route('admin.admissions.index')
            ->with('success', 'Admission application deleted successfully.');
    }
}
