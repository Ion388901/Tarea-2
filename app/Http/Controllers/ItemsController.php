<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ItemsController extends BaseController{
    public function index(Request $req){
        //$students = Student::all();
        //$data = [];
        //$data['students'] = $students;
        //return view('students.index', $data);
        return view('items.index');
    }

    public function create(Request $req){
        return view('items.create');
    }

    public function store(Request $req) {
        //$studentInput = $req->input('student');
        //$student = Student::create($studentInput);
        return redirect()->route('items.index');
    }

    public function edit($id){
        $share = Share::find($id);
        return view('items.edit', compact('share'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'type'=>'required|enum',
        ]);

        $items = Item::find($id);
        $items->name = $request->get('name');
        $items->type = $request->get('type');

        return redirect('/items')->with('exito', 'se realizo el proceso');
    }
}