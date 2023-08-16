<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list()
    {
        $data = Room::all();
        return view('room.list', ['data' => $data]);
    }

    public function add() {
        return view('room.add');
    }

    public function view($id)
    {
        $data = Room::find($id);
        return view('room.view', ['data' => $data]);
    }

    public function store(Request $request) {
        $request->validate([
            'room_type_id' => ['required', 'string', 'max:255'],
            'room_name' => ['required', 'string', 'max:255', 'unique:'.Room::class],
            'area' => ['required', 'string'],
            'price' => ['required'],
            'facility' => ['required', 'string'],
        ]);

        $data = new Room();
        $data->room_type_id = $request->input('room_type_id');
        $data->room_name = $request->input('room_name');
        $data->area = $request->input('area');
        $data->price = $request->input('price');
        $data->facility = $request->input('facility');
        $data->save();

        return redirect()->route('room.list');
    }

    public function delete($id) {
        $data = Room::findOrFail($id);
        $data->delete();

        return redirect()->route('room.list');
    }

    public function edit($id) {
        $data = Room::findOrFail($id);
        return view('room.edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'room_type_id' => ['required', 'string', 'max:255'],
            'room_name' => ['required', 'string', 'max:255', 'unique:'.Room::class],
            'area' => ['required', 'string'],
            'price' => ['required'],
            'facility' => ['required', 'string'],
        ]);

        $data = Room::findOrFail($id);
        $data->room_type_id = $request->input('room_type_id');
        $data->room_name = $request->input('room_name');
        $data->area = $request->input('area');
        $data->price = $request->input('price');
        $data->facility = $request->input('facility');
        $data->save();

        return redirect()->route('room.list');
    }
}
