<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('/css/voStyle.css')}}" rel="stylesheet" type="text/css">
		
    </head>
    <body class="login">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <!--div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div-->
            @endif
            <!--div class="content"-->
			<div class="title"><h1>Login Form</h1></div>
			 <!--div class="title m-b-md">
                    Volunteer Organization
                </div-->
				<!--div>
					@foreach ($vos as $vo)
					<p>{{$vo->name}}</p>
					@endforeach
				</div-->
					<div class = "login-container">
					<div class = "left"></div>
					<div class = "right">
						<div class="login form-box">
							{!! Form::open (array('method' => 'POST', 'class' => 'form-horizontal')) !!}
							<!-- if there are login errors, show them here -->
							<!--section class="text-box"-->
							<p>
								{{ $errors->first('email') }}
								{{ $errors->first('password') }}
							</p>
							<p>{!!Form::Label('email', 'Email') !!}</p>
								{!!Form::text('email', '') !!}
							
							<p>{!!Form::Label('password', 'Password') !!}</p>
								{!!Form::password('password') !!}
							
							
							<p>{!!Form::checkbox('name', 'value', false) !!} Remeber Me</p>
							
							{!!Form::submit('Login', array('class' => 'primary')) !!}
							 <a class="btn btn-link" href="">
								Forgot Your Password?
							 </a>
							
							{!! Form::close() !!}
						</div>
					
					</div>
					</div>
				</div>
            </div>
        </div>
    </body>
</html>
