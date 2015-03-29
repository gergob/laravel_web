<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/app.css') }}
	
	<title>Contact Cards</title>
	
</head>
<body>

	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href={{ URL::route('welcome') }}>Contact Cards</a>
        </div>
       <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">            
            <li><a href={{ URL::route('add_contacts') }}>Add Contact</a></li>
            <li><a href={{ URL::route('contacts') }}>Contacts</a></li>
          </ul>
          @if (Auth::check())
            {{ Form::open(array('url' => 'logout', 'method'=>'post' ,'class'=>'navbar-form navbar-right')) }}
              <button type="submit" class="btn btn-success">Logout</button>
            {{ Form::close() }}
          @endif
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="content">
        @yield('content')
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
