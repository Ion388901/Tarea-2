<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class JobsController extends BaseController{
    public function index(Request $req){
        //$students = Student::all();
        //$data = [];
        //$data['students'] = $students;
        //return view('students.index', $data);
        return view('jobs.index');
    }

    public function create(Request $req){
        return view('jobs.create');
    }

    public function store(Request $req) {
        //$studentInput = $req->input('student');
        //$student = Student::create($studentInput);
        return redirect()->route('jobs.index');
    }

    public function edit($id){
        $share = Share::find($id);
        return view('jobs.edit', compact('share'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
        ]);

        $jobs = Job::find($id);
        $jobs->name = $request->get('name');

        return redirect('/jobs')->with('exito', 'se realizo el proceso');
    }
}