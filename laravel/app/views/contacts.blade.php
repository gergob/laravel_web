@extends('layouts.main')

@section('content')

<h1> Contacts </h1>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">All contacts in the database</div>

  <!-- Table -->
  <table class="table">
    <tr>
    	<th>First Name</th>
    	<th>Last Name</th>
    	<th>Birthday</th>
    	<th>Website</th>
		<th>Email</th>
		<th>Work Phone</th>
		<th>Home Phone</th>
		<th>Mobile Phone</th>
		<th>ID</th>
    </tr>
    @foreach($all_contacts as $contact)
    	<tr>
	    	<td>{{{ $contact->first_name }}}</td>
	    	<td>{{{ $contact->last_name }}}</td>
	    	<td>{{{ $contact->birthday }}}</td>
	    	<td>{{{ $contact->website }}}</td>
			<td>{{{ $contact->email }}}</td>
			<td>{{{ $contact->work_phone }}}</td>
			<td>{{{ $contact->home_phone }}}</td>
			<td>{{{ $contact->mobile_phone }}}</td>
			<td>{{{ $contact->id }}}</td>
    	</tr>
	

	@endforeach
  </table>
</div>



@stop