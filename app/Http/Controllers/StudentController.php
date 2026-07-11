<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
     public function index()
{
    // Eager load the relationships
    $students = Student::with(['class', 'section'])->get();

    return Inertia::render('Student/Index', [
        'students' => StudentResource::collection($students),
    ]);
}
}