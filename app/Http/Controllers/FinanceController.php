<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Students;

class FinanceController extends Controller
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

        return view('finances.index', ['students' => $students]);
    }
    public function verify(Request $request, Students $student)
    {
        
        $student = Students::find($request->hidden_id);
        $student->status = '1';
        $student->save();

        $students = Students::latest()->get();                      // FOR GETTING ALL DATA FROM THE LATEST
        return view('finances.index', ['students' => $students]);
    }

    public function enroll(Request $request, Students $student)
    {
        
        $student = Students::find($request->hidden_id);
        $student->status = '2';
        $student->save();

        $students = Students::latest()->get();                      // FOR GETTING ALL DATA FROM THE LATEST
        return view('finances.index', ['students' => $students]);
    }



    public function show($id)
    {
        $students = Students::findOrFail($id);
        return view('finances.show', [ 'student' => $students ]);
    }
   


}
