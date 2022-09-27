<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$students = Students::all();                                  // FOR GETTING ALL DATA
        //$students = Students::orderBy('created_at', 'desc')->get();  // FOR ORDERING DESC or ASC
        //$students = Students::where('status','0')->get();         // FOR FINDING SPECIFIC DATA
        $students = Students::latest()->get();                      // FOR GETTING ALL DATA FROM THE LATEST
//
        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        return view('students.show', [ 'id' => $id ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $student = new Students(); /// creating a instance of the 'Student MODEL'

        $student->name = request('name');
        $student->stud_type = request('student_type');
        $student->acad_lvl = request('acad_lvl');
        $student->acad_yrlvl = request('acad_yrlvl');
        $student->acad_crse = request('acad_crse');

        $student->save();

        error_log($student);

        return view('students.index');
    }


}
