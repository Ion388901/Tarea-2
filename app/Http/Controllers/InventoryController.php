<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class InventoryController extends BaseController{
    public function index(Request $req){
        //$students = Student::all();
        //$data = [];
        //$data['students'] = $students;
        //return view('students.index', $data);
        return view('inventory.index');
    }

    public function create(Request $req){
        return view('inventory.create');
    }

    public function store(Request $req) {
        //$studentInput = $req->input('student');
        //$student = Student::create($studentInput);
        return redirect()->route('inventory.index');
    }

    public function edit($id){
        $share = Share::find($id);
        return view('inventory.edit', compact('share'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'item_id'=>'required|integer',
            'player_id'=>'required|integer',
            'amount'=>'required|integer'
        ]);

        $inven = Inventory::find($id);
        $inven->item_id = $request->get('item_id');
        $inven->player_id = $request->get('player_id');
        $inven->amount = $request->get('amount');

        return redirect('/inventory')->with('exito', 'se realizo el proceso');
    }
}