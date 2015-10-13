@extends('layouts.dashboard')

@section('header')
	<h1>Pages</h1>
	<a href="/page/create">Add Page</a>
@stop

@section('content')
    
	<table class="list" id="user" cellpadding="0px" cellspacing="0px">
		<thead>
			<th>Title</th>
			<th>URL</th>
			<th>Edit</th>
		</thead>
		<tbody>
			@foreach ($pages as $page)
				<tr>
					<td>{{ $page->title }}</td>
					<td><a href="{{ $page->slug }}" target="_blank">{{ $page->slug }}</a></td>
					<td><a href="/page/{{ $page->id }}/edit" class="btn push-right">Edit</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

			    
@stop