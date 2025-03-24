<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer|digits:2',
            'birth_year' => 'required|integer|digits:4',
        ]);

        Student::create($request->all());

        return redirect()->route('students.create')->with('success', 'Student added successfully!');
    }
}
