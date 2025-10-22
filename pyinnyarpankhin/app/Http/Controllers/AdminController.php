<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Degree;
use App\Models\Major;
use App\Models\Department;
use App\Models\Faculty;

class AdminController extends Controller
{
    public function index()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.index');
    }

    public function academic()
    {
        $degreesCount = Degree::count();
        $majorsCount = Major::count();
        $departmentsCount = Department::count();
        $facultiesCount = Faculty::count();

        return view('admin.academic', compact(
            'degreesCount',
            'majorsCount',
            'departmentsCount',
            'facultiesCount'
        ));
    }

    public function students()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.students');
    }

    public function calendar()
    {
        $events = \App\Models\Event::where('is_active', true)->orderBy('event_date', 'asc')->get();
        return view('admin.calendar', compact('events'));
    }

    public function reports()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.reports');
    }

    public function settings()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.settings');
    }
}
