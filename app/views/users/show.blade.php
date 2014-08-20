@extends('layouts.default')

@section('content')
	<h4>Perfil</h4>

  	<div class="well clearfix">
	    <div class="col-md-8">
		    @if ($user->first_name)
		    	<p><strong>First Name:</strong> {{ $user->first_name }} </p>
			@endif
			@if ($user->last_name)
		    	<p><strong>Last Name:</strong> {{ $user->last_name }} </p>
			@endif
		    <p><strong>Email:</strong> {{ $user->email }}</p>

		</div>
		<div class="col-md-4">
			<p><em>Perfil create: {{ $user->created_at }}</em></p>
			<p><em>Last modification: {{ $user->updated_at }}</em></p>
			<button class="btn btn-primary" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'">Edit</button>
		</div>
	</div>

	<h4>Membershio in:</h4>
	<?php $userGroups = $user->getGroups(); ?>
	<div class="well">
	    <ul>
	    	@if (count($userGroups) >= 1)
		    	@foreach ($userGroups as $group)
					<li>{{ $group['name'] }}</li>
				@endforeach
			@else
				<li>No exist</li>
			@endif
	    </ul>
	</div>

	<hr />

@stop
