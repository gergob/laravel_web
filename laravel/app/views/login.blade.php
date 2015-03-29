@extends('layouts.main')

@section('content')

	<h1> Login </h1>

	{{ Form::open(array('url' => 'login', 'method'=>'post' ,'class'=>'form-horizontal')) }}
 	
		@foreach ($errors->all('<div class="alert alert-danger" role="alert">:message</div>') as $message)
   			{{$message}}
		@endforeach

        <div class="form-group">	
    		 {{ Form::label('email', 'Email Address', array('class'=>'col-sm-2 control-label')) }}
    		<div class="col-sm-3">
    			{{ Form::text('email', Input::old('email'), array('placeholder'=> 'user@example.com', 
    				'class'=>'form-control'))}}
			</div>
  		</div>

        <div class="form-group">	
	        {{ Form::label('password', 'Password', array('class'=>'col-sm-2 control-label')) }}
        	<div class="col-sm-3">
    	    	{{ Form::password('password', array('class'=>'form-control')) }}
        	</div>
  		</div>

  		<div class="form-group">
  			<div class="col-sm-5">	
	        	{{ Form::submit('Sign in', array('class'=>'btn btn-primary btn-block '))}}
	        </div>
  		</div>
        
    {{ Form::close() }}

    
@stop
