<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Duration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DegreeController extends Controller
{
    public function index()
    {
        $degrees = Degree::with('duration')->get();
        return view('admin.degrees.index', compact('degrees'));
    }

    public function create()
    {
        $durations = Duration::all();
        return view('admin.degrees.create', compact('durations'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'degree_name' => 'required|string|max:255',
            'duration_id' => 'required|exists:duration,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Degree::create($request->only(['degree_name', 'duration_id']));

        return redirect()->route('admin.degrees.index')
            ->with('success', 'Degree created successfully.');
    }

    public function show(Degree $degree)
    {
        $degree->load('duration', 'majors');
        return view('admin.degrees.show', compact('degree'));
    }

    public function edit(Degree $degree)
    {
        $durations = Duration::all();
        return view('admin.degrees.edit', compact('degree', 'durations'));
    }

    public function update(Request $request, Degree $degree)
    {
        $validator = Validator::make($request->all(), [
            'degree_name' => 'required|string|max:255',
            'duration_id' => 'required|exists:duration,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $degree->update($request->only(['degree_name', 'duration_id']));

        return redirect()->route('admin.degrees.index')
            ->with('success', 'Degree updated successfully.');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();

        return redirect()->route('admin.degrees.index')
            ->with('success', 'Degree deleted successfully.');
    }
}
