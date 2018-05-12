<?php
namespace App\Http\Controllers;

use App\Events\EraRequestWasMade;
use Illuminate\Http\Request;
use App\ListEvent;
use App\CategoryList;
use App\Ticket;
use App\EventDetails;
use App\Event;


class ListEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ListEvent::all();

        $events =  ListEvent::orderby('EventStartDate','desc')->paginate(5);
        return view('events.index')->with('events',$events);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryList::all(['CategoryID','CategoryName']);
        return view('events.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $eventDetails = new EventDetails;
        $ticket = new Ticket;
        $eID;
        $tID;
        $uID = 1;

        $ticket = new Ticket;
        $ticket->TicketQuantity = $request->input('ticketAvailable');
        $ticket->TicketPrice = $request->input("ticketPrice");


        $event = new Event;
        $tempSDate = date('y-m-d H:i',strtotime(strtr($request->input('eventSD'),'/','-')));
        $tempEDate = date('y-m-d H:i',strtotime(strtr($request->input('eventED'),'/','-')));
        
        
        $event->EventStartDate = $tempSDate;
        $event->EventEndDate =$tempEDate;



        $details = new EventDetails;
        $details->EventName = $request->input('eventName');
        $details->EventDescription = $request->input('eventDesc');
        $details->EventLocation = $request->input('eventLocation');
        $details->CategoryID = $request->input('categoryID');
      
        $ticket->save();
        $tID = $ticket->TicketID;
        $event->save();
        $eID = $event->EventID;



        $details->EventID = $eID;
        $details->UserID = $uID;
        $details->TicketID = $tID;

        $details->save();



        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = ListEvent::find($id);
        return view('events.show')->with('details',$details);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
