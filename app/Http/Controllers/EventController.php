<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    public function index()

    {
        /*$events = [];
        $data = Event::all();
        if($data->count()){
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day')
                );
            }
        }
        $calendar = Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            //'firstDay' => 1,
            //'locale' => 'es'
            'defaultView' => 'agendaWeek',

        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'eventClick' => 'function() {
             showModal();
         }'
        ]);*/
        //$calendar = Calendar::addEvents($events);
        //$calendar = $calendar::setOptions(['firstDay' => 1,]);
        return view('crm.mycalendar');

    }
}
