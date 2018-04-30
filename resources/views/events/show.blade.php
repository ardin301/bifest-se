@extends('layouts.app')

@section('content')
<a href="/events" class="btn btn-default">Go Back</a>

<h1>{{$details->EventName}}</h1>
<h5>Created By : {{$details->Username}}</h5>

<div>
	<p>Ticket Price    : Rp. {{$details->TicketPrice}}</p>
	<p>Ticket Quantity : {{$details->TicketQuantity}} pcs</p>
	<p>Location        : {{$details->EventLocation}}</p>
	<div>
		{{$details->EventDescription}}
	</div>

</div>
@endsection



