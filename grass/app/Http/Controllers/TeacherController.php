<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    
    public function showUploadForm()
    {
        return view('teacher.upload');
    }

   
    public function uploadFiles(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        return back()->with('success', 'File uploaded successfully!');
    }

    public function viewAssignments()
    {
        return view('teacher.assignments');
    }

    
    public function viewLectures()
    {
        $lectures = DB::table('lectures')->get();
        return view('teacher.lectures', compact('lectures'));
    }

    
    public function apply()
    {
        return view('teacher.apply');
    }

   
    public function showApplyForm()
    {
        return view('teacher_apply');
    }

   
    public function uploadCV(Request $request)
    {
        $request->validate([
            'firstname'  => 'required|string|max:255',
            'lastname'   => 'required|string|max:255',
            'birthday'   => 'required|date',
            'residence'  => 'required|string|max:255',
            'phone'      => 'required|digits:10',
            'email'      => 'required|email|unique:teachers,email',
            'department' => 'required|string',
            'cv'         => 'required|mimes:pdf|max:2048'
        ]);

        $cvPath = $request->file('cv')->store('cv_uploads', 'public');

        DB::table('teachers')->insert([
            'firstname'   => $request->firstname,
            'lastname'    => $request->lastname,
            'birthday'    => $request->birthday,
            'residence'   => $request->residence,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'department'  => $request->department,
            'cv'          => $cvPath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }

   
    public function showLectureUploadForm()
    {
        return view('teacher.upload_lecture');
    }

    public function uploadLecture(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'video'       => 'required|mimes:mp4,mov,avi,wmv|max:50000' // Max 50MB
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        DB::table('lectures')->insert([
            'title'       => $request->title,
            'description' => $request->description,
            'video'       => $videoPath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return back()->with('success', 'Lecture uploaded successfully!');
    }
}
