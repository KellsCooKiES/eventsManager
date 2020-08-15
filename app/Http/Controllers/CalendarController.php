<?php

namespace App\Http\Controllers;

use App\ProjectEvent;
use App\Providers\EventServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($companyId)
    {
        $events = ProjectEvent::where('company_id',$companyId)->orderBy('event_date', 'asc')->get()->groupBy(function($events) {
            return Carbon::parse($events->event_date)->format('d.m'); // А это то-же поле по нему мы и будем группировать
        });
        return view('calendar.index',[
            'events' => $events,
        ]);
    }
}
