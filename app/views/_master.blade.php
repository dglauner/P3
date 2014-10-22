<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
{{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); }}
{{ HTML::style('css/default.css'); }}

<title>@yield('title','My Title')</title>

</head>

<body>
	 <div class="container">
	 
      	<div class="navbar navbar-default">
	      	<!-- header -->
	      	<h1 class="text-center">Developer's Best Friend</h1>
	  	    <div id="breadcrumbs">
	  	      <ul class="nav navbar-nav breadcrumbs">
	  	        <li>
	  	          <a href="#">Test</a>
	  	        </li>
	  	      </ul>
	  	    </div>
	  	  </div>

      	<!-- main -->
		<div id="container">
		
		<table style="width: 100%" class="table table-bordered">
			<tr>
				<td>		
					{{ Form::open(array('url' => 'faketext')) }}
						{{ Form::label('num-text', 'How Many Paragraphs?'); }}
					    @yield('dropdown')
					    {{ Form::submit('Create Fake Text!!'); }}
					{{ Form::close() }}
				</td>
				<td>
					{{ Form::open(array('url' => 'generateuser')) }}
						{{ Form::label('num-users', 'How Many users?'); }}
					    {{ Form::select('num-users', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), '1'); }}
					    {{ Form::submit('Generate Users!'); }}
					{{ Form::close() }}
				</td>
			</tr>
		</table>
		
		
		@yield('content','My Content')

	
		</div>
      	
      	<!-- footer 
      	<div class="footer">
      	 <div class="text-center">
      		  Footer Text
  		</div>
  		</div>
  	</div>-->
<!-- Latest compiled and minified JavaScript -->
{{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'); }}
	
</body>

</html>
