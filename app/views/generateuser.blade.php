@extends('_master')

@section('title')
	Generate user
@stop

@section('content')
	@if (isset($fakers))
		<div class="jumbotron">
			@for($i = 0; $i < Input::get('num-users'); $i++)
			<p>
				{{ HTML::image($fakers->imageUrl($width = 100, $height = 100)."?".$i, 'User Image', array('height' => '100px','width' => '100px','class' => 'floatRight')); }}
				Name:<br/>{{ $fakers->name; }}
				<br/>
				Address:<br/>{{ $fakers->streetAddress; }}
				<br/>{{ $fakers->city; }}, {{ $fakers->stateAbbr; }}  {{ $fakers->postcode; }}

				@if ($phone === '1')
					<br/>
					Phone:<br/>{{ $fakers->phoneNumber; }}
				@endif
				@if ($email === '1')
					<br/>
					Email:<br/>{{ $fakers->email; }}
				@endif
				<br/>
				Bio:<br/>{{ $fakers->text; }}
			</p>
			<hr>
			@endfor
		</div>
	@endif
@stop