@extends('layouts.app')

@section('content')

<a href="/events" class="btn btn-default">Go Back</a>

<h1>Create Event</h1>

<form class="form-horizontal" action="{{route('events.store')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
        <label for="en" class ="control-label col-sm-2">Event Name</label>
 		<div class="col-sm-10">
			<input type="text" name="eventName" class="form-control" id="en">
		</div>
	</div>

	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Event Location</label>
 		<div class="col-sm-10">
			<input type="text" name="startDate" class="form-control">
		</div>
	</div>

	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Event Category</label>
 		<div class="col-sm-10">
			<select class="form-control" name="categoryID">
				<option selected disabled hidden>==Choose Categories==</option>
				@foreach($categories as $category)
					<option value="{{$category->CategoryID}}">{{$category->CategoryName}}</option>
				@endforeach
			</select>
		</div>
	</div>
	
	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Event Description</label>
 		<div class="col-sm-10">
			<textarea class="form-control" placeholder="Description Goes Here"></textarea>
		</div>
	</div>


	<div class="form-group">
        <label for="sd" class ="control-label col-sm-2">Start Date</label>
 		<div class="col-sm-10">
	        <div class='input-group date' id='datetimepicker-start'>
	            <input type='text' class="form-control" id="sd" name="startDate" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>

	<div class="form-group">
        <label for="ed" class ="control-label col-sm-2">End Date</label>
 		<div class="col-sm-10">
	        <div class='input-group date' id='datetimepicker-end'>
	            <input type='text' class="form-control" id="ed" name="endDate" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>

	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Ticket Available</label>
 		<div class="col-sm-10">
			<input type="number" name="startDate" class="form-control" min="0">
		</div>
	</div>

	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Ticket Price</label>
 		<div class="col-sm-10">
			<input type="number" name="startDate" class="form-control" min="0">
		</div>
	</div>
	
	<div class="form-group">
		<div class="control-label col-sm-2"></div>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
</form>

@endsection