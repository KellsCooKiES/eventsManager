<?php

namespace App\Http\Controllers;

use App\Company;
use App\ProjectEvent;
use App\Shift;
use App\User;
use Illuminate\Http\Request;

class ProjectEventController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = ProjectEvent::all();
        return view('Events.index',[
            'events' => $events
        ]);
    }

    public function create($companyId)
    {
        return view('Events.create',[
            'users' => User::where('company_id',$companyId)->get(),
            'shifts' => Shift::all()
            ]);
    }

    public function store(Request $request)
    {
        $companyId = auth()->user()->company->id;
    
        $event = ProjectEvent::create([
            'project_name' => $request->input('project_name'),
            'cost' => $request->input('cost'),
            'work_type' => $request->input('work_type'),
            'user_id' => $request->input('user_id'),
            'company_id' => $companyId,
            'event_date' => $request->input('event_date'),
            'shift_id' => $request->input('shift_id'),
        ]);

        return redirect('events');
    }

    public function edit($id)
    {
        $event =  ProjectEvent::find($id);

        return view('Events.edit',[
            'event' => $event,
            'users' => User::where('company_id',$event->company_id)->get(),
            'shifts' => Shift::all()
        ]);
    }

    public function update(Request $request,$id)
    {
        $companyId = User::find(\request('user_id'))->value('company_id');
        $event= ProjectEvent::find($id)->update([
            'project_name' => $request->input('project_name'),
            'cost' => $request->input('cost'),
            'work_type' => $request->input('work_type'),
            'user_id' => $request->input('user_id'),
            'company_id' => $companyId,
            'event_date' => $request->input('event_date'),
            'shift_id' => $request->input('shift_id'),
        ]);

        return redirect('events');
    }

    public function destroy($id)
    {
        ProjectEvent::destroy($id);

        return redirect('events');
    }
}
