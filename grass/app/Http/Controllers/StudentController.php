<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    
    public function admission()
    {
        return view('student.admission');
    }

    
    public function lecture()
    {
        return view('student.lecture');
    }

    
    public function assignment()
    {
        return view('student.assignment');
    }

    public function profile()
{
    $user = session('user'); 
    return view('student.profile', compact('user'));
}


    
    public function store(Request $request)
    {
        
        $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'residence' => 'required|string|max:255',
            'class_role' => 'required|integer',
            'group' => 'required|string|in:science,commerce,arts',
            'phone' => 'required|string|max:20',
        ]);

        
        Student::create([
            'student_id' => $request->student_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'residence' => $request->residence,
            'class_role' => $request->class_role,
            'student_group' => $request->group, 
            'phone' => $request->phone,
        ]);

       

       
        return redirect()->route('student.dashboard')->with('success', 'Student added successfully!');
    }
}