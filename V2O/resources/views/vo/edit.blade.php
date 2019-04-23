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
                  <h1>V.O Profile</h1>
                </div>
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
			<div class = "vo-info-container">
               
					{!! Form::open (array('method' => 'PUT','url' => '/vo/'. $vo->id)) !!}
						<div class="text-left">
							<p>{!!Form::Label('name', "Organization's Name") !!}</p>
								{!!Form::text('name', $vo->name) !!}
				
							<p>{!!Form::Label('vo_description', 'Description') !!}</p>
								{!!Form::text('vo_description', $vo->vo_description) !!}
							
							<p>{!!Form::Label('required_skills', 'Required Skills') !!}</p>
								{!!Form::text('required_skills', $vo->required_skills) !!}
							
							<p>{!!Form::Label('phone_number', 'Phone Number') !!}</p>
								{!!Form::text('phone_number', $vo->phone_number) !!}
							
							<p>{!!Form::Label('work_location', 'Location') !!}</p>
								{!!Form::text('work_location', $vo->work_location) !!}
						</div>
						<div class= right-container>
							<div class="short-text-right">
								<p>{!!Form::Label('time_period', 'Time Period') !!}</p>
									{!!Form::text('time_period', $vo->time_period) !!}
									
								<p>{!!Form::Label('work_hours', 'Hours') !!}</p>
								{!!Form::text('work_hours', $vo->work_hours) !!}
								
								<p>{!!Form::Label('stipend', 'Stipend') !!}</p>
									{!!Form::text('stipend', $vo->stipend) !!}
							</div>
							<div class="med-text-right">
								<p>{!!Form::Label('email', 'Email') !!}</p>
								{!!Form::text('email', $vo->email) !!}
								
								<p>{!!Form::Label('password', 'Password') !!}</p>
									{!!Form::text('password', $vo->password) !!}
							
								<p>{!!Form::Label('confirm_password', 'Re-type Password') !!}</p>
									{!!Form::text('confirm_password', $vo->confirm_password) !!}
							</div>
							
						</div>
						{!!Form::submit('Update') !!}
					{!! Form::close() !!}
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
