@extends('layouts.dashboard')

@section('header')
	<h1>Pages</h1>
	<p>Create a page.</p>
@stop

@section('content')
    

   	{{ Form::open(['method' => 'POST', 'action' => 'page.store']) }}

		@include('pages._page')

		<input type="submit" value="Create" class="btn submit">
		
	{{Form::close()}}
			    
@stop