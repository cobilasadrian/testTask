@extends('layouts.app')

@section('content')
    <script src="/assets/js/login-validation.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="col-xs-2">
                                            <i class="glyphicon glyphicon-ok email-glyphicon-ok"></i>
                                            <i class="glyphicon glyphicon-remove email-glyphicon-remove"></i>
                                        </div>
                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                        <div class="col-xs-2">
                                            <i class="glyphicon glyphicon-ok password-glyphicon-ok"></i>
                                            <i class="glyphicon glyphicon-remove password-glyphicon-remove"></i>
                                        </div>
                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button id="loginBtn" type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
