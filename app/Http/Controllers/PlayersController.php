<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Player;

class PlayersController extends BaseController{
    public function index(Request $req){
        //$students = Student::all();
        //$data = [];
        //$data['students'] = $students;
        //return view('students.index', $data);
        return view('players.index');
    }

    public function create(Request $req){
        return view('players.create');
    }

    public function store(Request $req) {
        //$studentInput = $req->input('student');
        //$student = Student::create($studentInput);
        return redirect()->route('students.index');
    }

    public function edit($id){
        $share = Share::find($id);
        return view('players.edit', compact('share'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'level'=>'required|integer',
            'job_id'=>'required|integer'
        ]);

        $players = Player::find($id);
        $players->name = $request->get('name');
        $players->level = $request->get('level');
        $players->job_id = $request->get('job_id');

        return redirect('/players')->with('exito', 'se realizo el proceso');
    }
    
}