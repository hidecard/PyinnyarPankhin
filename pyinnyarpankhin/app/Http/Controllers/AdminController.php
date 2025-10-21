<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.index');
    }

    public function academic()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.academic');
    }

    public function students()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.students');
    }

    public function calendar()
    {
        // You can pass data to the view here if needed, e.g., from database
        return view('admin.calendar');
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
