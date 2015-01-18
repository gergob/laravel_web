@extends('layouts.main')

@section('content')

<h1> Add Contact </h1>

{{ Form::open(array('route' => 'add_contacts','class'=>'form-horizontal')) }}

  <div class="form-group">
    <label for="first_name" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-5">
    	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name..." required>
	</div>
  </div>
 
 <div class="form-group">
    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
     <div class="col-sm-5">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name..." required>
    </div>
  </div>

  <div class="form-group">
    <label for="birthday" class="col-sm-2 control-label">Birthday</label>
     <div class="col-sm-5">
    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday...">
    </div>
  </div>

  <div class="form-group">
    <label for="website" class="col-sm-2 control-label">Website</label>
     <div class="col-sm-5">
    <input type="text" class="form-control" id="website" name="website" placeholder="Enter website...">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
     <div class="col-sm-5">
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email...">
    </div>
  </div>

  <div class="form-group">
    <label for="work_phone" class="col-sm-2 control-label">Work Phone</label>
     <div class="col-sm-5">
    <input type="tel" class="form-control" id="work_phone" name="work_phone" placeholder="Enter Work Phone Number...">
    </div>
  </div>

  <div class="form-group">
    <label for="home_phone" class="col-sm-2 control-label">Home Phone</label>
     <div class="col-sm-5">
    <input type="tel" class="form-control" id="home_phone" name="home_phone" placeholder="Enter Home Phone Number...">
    </div>
  </div>

  <div class="form-group">
    <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone</label>
     <div class="col-sm-5">
    <input type="tel" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="Enter Mobile Phone Number...">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Save Contact</button>

 {{ Form::close() }}

@stop