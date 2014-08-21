@extends('layouts.default')
@section('content')


<body id="register-page">
    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>Register</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                      {{ Form::open(array('action' => 'UserController@store')) }}
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
                                    {{ ($errors->has('email') ? $errors->first('email') : '') }}
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                                    {{ ($errors->has('password') ?  $errors->first('password') : '') }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                                      {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm password')) }}
                                      {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
                                </div>
                            </div>
                        </div>
                        <br><br>
                        {{ Form::submit('Register', array('class' => 'btn featured btn-block')) }}
                        {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</body>

@stop
