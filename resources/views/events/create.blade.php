@extends('layouts.app')

@section('content')

<a href="/events" class="btn btn-default">Go Back</a>

<h1>Create Event</h1>

<form class="form-horizontal">
	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Event Name</label>
 		<div class="col-sm-10">
			<input type="text" name="startDate" class="form-control">
		</div>
	</div>
	
	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">Start Date</label>
 		<div class="col-sm-10">
	        <div class='input-group date' class='datetimepicker'>
	            <input type='text' class="form-control" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>

	<div class="form-group">
        <label for="un" class ="control-label col-sm-2">End Date</label>
 		<div class="col-sm-10">
	        <div class='input-group date' class='datetimepicker'>
	            <input type='text' class="form-control" />
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>
</form>
@endsection


<script type="text/javascript">
    $(function () {
        $('.datetimepicker').datetimepicker();
    });
</script>