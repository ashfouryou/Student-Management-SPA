<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    public function index(){
        $students = StudentResource::collection(Student::all());
        return inertia('Students/Index',[
            'students'=>$students
        ]);
    }
}
