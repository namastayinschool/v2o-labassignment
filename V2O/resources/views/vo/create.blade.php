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
    <body>
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
            <div class="content">
                <div class="title">
                    <h1>VO Sign Up<h1>
                </div>
			<div class = "sign-container">
					<div class = "sign-left">
					<section class="w3-container">
						@if($errors->any())
							<section class="w3-red">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							</section>
						@endif
					</section>
					<!--h3>Account Information</h3-->
						<div class="sign-form-box">
						
							{!! Form::open (array('url' => '/vo')) !!}
							
							<p>{!!Form::Label('name', "Organization's Name") !!}</p>
								{!!Form::text('name','', ['placeholder'=>'Weeb Kids']) !!}
							
							<p>{!!Form::Label('email', 'Email') !!}</p>
								{!!Form::text('email', '',['placeholder'=>'weebkids@g.com']) !!}
							
							<p>{!!Form::Label('password', 'Password') !!}</p>
								{!!Form::password('password',['placeholder'=>'******']) !!}
							
							<p>{!!Form::Label('confirm_password', 'Re-type Password') !!}</p>
								{!!Form::password('confirm_password',['placeholder'=>'******']) !!}
							
							{!!Form::submit('Sign up') !!}
						</div>
					</div>
					<div class="vl"></div>
				<div class = "sign-right">
				<div class="sign-form-box">
						<p>
							{!!Form::Label('phone_number', 'Phone Number') !!}</p>
							{!!Form::text('phone_number','',['placeholder'=>'246-428-8762'] ) !!}
						
						<p>{!!Form::Label('vo_description', 'Description') !!}</p>
							{!!Form::text('vo_description', '', ['placeholder'=>'Day care Centre']) !!}
						
						<p>{!!Form::Label('required_skills', 'Required Skills') !!}</p>
							{!!Form::text('required_skills','',['placeholder'=>'child care']) !!}
						
						<p>{!!Form::Label('work_location', 'Location') !!}</p>
							{!!Form::text('work_location', '',['placeholder'=>'Cave Hill, St.Michael']) !!}
						
						<p>{!!Form::Label('work_hours', 'Hours') !!}</p>
							{!!Form::text('work_hours','',['placeholder'=>'8:00am - 4:30']) !!}
						<section class="fl">
						<p>{!!Form::Label('time_period', 'Time Period') !!}</p>
							{!!Form::text('time_period','',['placeholder'=>'2 Months']) !!}
						
						<p>{!!Form::Label('stipend', 'Stipend') !!}</p>
							{!!Form::text('stipend','',['placeholder'=>'$-']) !!}
						</section>
						
					{!! Form::close() !!}
				</div>
				</div>
                <!--div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div-->
            </div>
        </div>
    </body>
</html>
