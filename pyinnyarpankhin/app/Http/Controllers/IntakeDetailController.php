<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Models\IntakeDetail;
use Illuminate\Http\Request;

class IntakeDetailController extends Controller
{
    public function index(Intake $intake)
    {
        $intakeDetails = $intake->intakeDetails;
        return view('admin.intakes.details.index', compact('intake', 'intakeDetails'));
    }

    public function create(Intake $intake)
    {
        return view('admin.intakes.details.create', compact('intake'));
    }

    public function store(Request $request, Intake $intake)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $intake->intakeDetails()->create($request->all());

        return redirect()->route('admin.intakes.details.index', $intake)
            ->with('success', 'Intake detail created successfully.');
    }

    public function show(Intake $intake, IntakeDetail $detail)
    {
        return view('admin.intakes.details.show', compact('intake', 'detail'));
    }

    public function edit(Intake $intake, IntakeDetail $detail)
    {
        return view('admin.intakes.details.edit', compact('intake', 'detail'));
    }

    public function update(Request $request, Intake $intake, IntakeDetail $detail)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $detail->update($request->all());

        return redirect()->route('admin.intakes.details.index', $intake)
            ->with('success', 'Intake detail updated successfully.');
    }

    public function destroy(Intake $intake, IntakeDetail $detail)
    {
        $detail->delete();

        return redirect()->route('admin.intakes.details.index', $intake)
            ->with('success', 'Intake detail deleted successfully.');
    }
}
