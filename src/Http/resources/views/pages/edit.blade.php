@extends('layouts.dashboard')

@section('header')
	<h1>Pages</h1>
	<p>Edit a page.</p>
@stop

@section('content')
    
   	{{ Form::model( $page, ['method' => 'PUT', 'route' => ['page.update', $page->id]] ) }}

		@include('pages._page')

		<input type="submit" value="Update" class="btn submit">
		
	{{Form::close()}}

@stop
