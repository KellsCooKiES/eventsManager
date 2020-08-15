<?php

namespace App\Http\Controllers;

use App\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shifts = Shift::all();
        return view('shifts.index',[
            'shifts' => $shifts
        ]);
    }

    public function create()
    {
        return view('shifts.create');
    }

    public function store(Request $request)
    {
        $shift = Shift::create([
            'name' => $request->input('name')
        ]);

        return redirect('shifts');
    }

    public function edit($id)
    {
        $shift =  Shift::find($id);
        return view('shifts.edit',[
            'shift' => $shift
        ]);
    }

    public function update($id)
    {
        $shift= Shift::find($id);
        $shift->name = \request('name');
        $shift->save();
        return redirect('shifts');
    }

    public function destroy($id)
    {
        Shift::destroy($id);

        return redirect('shifts');
    }
    //
}
