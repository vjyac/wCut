@extends('layouts.default')
@section('content')


<body id="register-page">
		<div id="hero" class="static-header light">
				<div class="text-heading">
						<h1>Login</h1>
				</div>

				<div class="container">
						<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
											{{ Form::open(array('action' => 'SessionController@store')) }}
												<div class="form-group">
														<label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
														<div class="col-sm-9 col-xs-12">
																{{ Form::text('email', null, array('class' => 'form-control  required email', 'placeholder' => 'Email')) }}
														</div>
												</div>
												<br><br>
												<div class="form-group">
														<label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
														<div class="col-sm-9 col-xs-12">
																{{ Form::password('password', array('class' => 'form-control required', 'placeholder' => 'Password')) }}
														</div>
												</div>
												<br><br>
												{{ Form::submit('Login', array('class' => 'btn featured btn-block'))}}
												{{ Form::close() }}

								</div>
						</div>
				</div>
		</div>
</body>



@stop
