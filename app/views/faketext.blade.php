@extends('_master')

@section('title')
	Fake Text
@stop

@section('content')
	@if (isset($text))
		<div class="jumbotron">
			@foreach ($text as $t)
			  <p>{{ $t }}</p>
			@endforeach
		</div>
	@endif
@stop