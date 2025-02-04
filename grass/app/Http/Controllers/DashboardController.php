<?php
namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function studentDashboard()
    {
        return view('dashboard.student');
    }

    public function teacherDashboard()
    {
        return view('dashboard.teacher');
    }

    public function adminDashboard()
    {
        return view('dashboard.admin');
    }
}
