<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\colleges;
use App\Models\departments;
use App\Models\programs;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = students::with(['college', 'program'])->get();
        return view('students.index', compact('students'));
    }

    public function showStudent($id)
    {
        $student = students::with(['college', 'program'])->findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function showAllColleges()
    {
        $colleges = colleges::with(['departments', 'programs'])->get();
        return view('colleges.index', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = colleges::with(['departments', 'programs'])->findOrFail($id);
        return view('colleges.show', compact('college'));
    }

    public function showAllDepartments()
    {
        $departments = departments::with('college')->get();
        return view('departments.index', compact('departments'));
    }
}
