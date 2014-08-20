@extends('layouts.default')
@section('content')

<body id="register-page">


    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>Register is Free</h1>
            <p>complete de form</p>
        </div>
				<br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
										{{ Form::open(array('action' => 'UserController@store')) }}
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
																{{ Form::text('email', null, array('class' => 'form-control  required email', 'placeholder' => trans('users.email'))) }}
                            </div>
                        </div>
												<br><br>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
																{{ Form::password('password', array('class' => 'form-control required', 'placeholder' => trans('users.password'))) }}
                            </div>
                        </div>
												<br><br>
												<div class="form-group">
														<label for="password_confirmation" class="col-sm-3 col-xs-12 control-label">Password confirmation</label>
														<div class="col-sm-9 col-xs-12">
																{{ Form::password('users.password_confirmation', array('class' => 'form-control required', 'placeholder' => trans('users.password_confirmation'))) }}
														</div>
												</div>
												<br><br>
												{{ Form::submit('Register', array('class' => 'btn featured btn-block')) }}
                    {{ Form::close() }}


				<!-- BEGIN SLIDER CONTENT -->
				<div class="col-sm-10 col-sm-offset-1">
					<div class="flexslider testimonials-slider center animated hiding" data-animation="fadeInTop">
						<ul class="slides">
							<li>
								<div class="testimonial resp-center clearfix">
										Ye tienes cuenta ?.
								</div>
							</li>
						</ul>
					</div>
				</div>


                    <p class="agree-text"></p>
                </div>
            </div>
        </div>
    </div>



</body>


@stop
