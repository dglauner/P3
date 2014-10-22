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

@section('dropdown')
{{ Form::select('num-text', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), Input::get('num-text', '3')); }}
@stop