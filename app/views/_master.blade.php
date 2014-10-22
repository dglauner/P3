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
		</div>

      	<!-- main -->
		<div id="container">
		
		<table style="width: 100%" class="table table-bordered">
			<tr>
				<td class="col-md-2"><h2>Lorem Ipsum Generator</h2>
				<br/>
				In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout. 
				</td>
				<td class="col-md-2"><h2>Random User Generator</h2>
				<br/>
				Create random user data for your applications. 
				</td>
			</tr>
			<tr>
				<td>		
					{{ Form::open(array('url' => 'faketext')) }}
						{{ Form::label('num-text', 'How Many Paragraphs?'); }}
					    {{ Form::select('num-text', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), Input::get('num-text', '3')); }}
					    {{ Form::submit('Create Fake Text!!'); }}
					{{ Form::close() }}
				</td>
				<td>
					{{ Form::open(array('url' => 'generateuser')) }}
						{{ Form::label('num-users', 'How Many users?'); }}
					    {{ Form::select('num-users', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), Input::get('num-users', '1')); }}
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
