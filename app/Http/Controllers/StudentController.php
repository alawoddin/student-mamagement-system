<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClassResource;
use Inertia\Inertia;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Models\Classes;

class StudentController extends Controller
{
     public function index()
{
    // Eager load the relationships
    $students = Student::with(['class', 'section'])->paginate(10);

    return Inertia::render('Student/Index', [
        'students' => StudentResource::collection($students),
    ]);
}

    public function create()
    {
        $classes = ClassResource::collection(Classes::all());

        return Inertia::render('Student/Create', [
            'classes' => $classes,
        ]);
    }

     public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        return redirect()->route('students.index');
    }

}