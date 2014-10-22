@extends('_master')

@section('title')
	Generate user
@stop

@section('content')
	@if (isset($fakers))
		<div class="jumbotron">
			@for($i = 0; $i < Input::get('num-users'); $i++)
			<p>
				Name:<br/>{{ $fakers->name; }}
				<br/>
				Address:<br/>{{ $fakers->streetAddress; }}
				<br/>{{ $fakers->city; }}, {{ $fakers->stateAbbr; }}  {{ $fakers->postcode; }}
				@if ($phone === '1')
					<br/>
					Phone:<br/>{{ $fakers->phoneNumber; }}
				@endif
				<br/>
				Bio:<br/>{{ $fakers->text; }}
			<p/>
			@endfor
		</div>
	@endif
@stop