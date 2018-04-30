@extends('layouts.app')

@section('content')
<h1>Event List</h1>
<div>
	<a href="events/create" class="btn btn-default">Create Event</a>
	@if(count($events) > 1)
		@foreach($events as $event)
		<div class="well">
			<a href="/events/{{$event->EventID}}"><h3>{{$event->EventName}}</h3></a>
		</div>
		<div>
			<p>Category          : {{$event->CategoryName}}</p>
			<p>Event Description : {{$event->EventDescription}}</p>	
			<p>Start Date 		 : {{$event->EventStartDate}}</p>
			<p>End Date          : {{$event->EventEndDate}}</p>
		</div>
		@endforeach
		{{$events->links()}}
	@else
		<p>no event</p>
	@endif
</div>
@endsection



