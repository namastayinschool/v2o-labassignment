@extends('layout')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Volunteer Interests Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        @section('content')
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

			.box{
				padding: 12px;
				border: 3px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Volunteer Sign Up
                </div>

				<div class="box">
				{!! Form::open (array('url' => '/volunteer')) !!}
					<p>
						{!!Form::Label('firstName', 'First Name') !!}
						{!!Form::text('firstName', '') !!}
					</p>
					<p>
						{!!Form::Label('lastName', 'Last Name') !!}
						{!!Form::text('lastName', '') !!}
					</p>
					<p>
						{!!Form::Label('homeAddress', 'Home Address') !!}
						{!!Form::text('homeAddress', '') !!}
					</p>
					<p>
						{!!Form::Label('cellNumber', 'Cell Number') !!}
						{!!Form::text('cellNumber', '') !!}
					</p>
					<p>
						{!!Form::Label('homeNumber', 'Home Number') !!}
						{!!Form::text('homeNumber', '') !!}
					</p>
					<p>
						{!!Form::Label('idNumber', 'ID Number') !!}
						{!!Form::text('idNumber', '') !!}
					</p>
					<p>
						{!!Form::Label('examNumber', 'Exam Number') !!}
						{!!Form::text('examNumber', '') !!}
					</p>
					<p>
						{!!Form::Label('emailAddress', 'Email') !!}
						{!!Form::text('emailAddress', '') !!}
					</p>
					<p>
						{!!Form::Label('password', 'Password') !!}
						{!!Form::text('password', '') !!}
					</p>
					<p>
						{!!Form::Label('interest', 'Select your Interests') !!}
					</p>
					<p>
						{!!Form::Label('interest1', 'Interest 1') !!}
						{!!Form::select('interest1', array('animal care'=>'Animal Care','senior citizens care'=>'Senior Citizen Care','child care'=>'Child Care','sports'=>'Sports','beach cleanup'=>'Beach Cleanup','teaching'=>'Teaching')) !!}

						{!!Form::Label('interest2', 'Interest 2') !!}
						{!!Form::select('interest2', array('animal care'=>'Animal Care','senior citizens care'=>'Senior Citizen Care','child care'=>'Child Care','sports'=>'Sports','beach cleanup'=>'Beach Cleanup','teaching'=>'Teaching')) !!}

						{!!Form::Label('interest3', 'Interest 3') !!}
						{!!Form::select('interest3', array('animal care'=>'Animal Care','senior citizens care'=>'Senior Citizen Care','child care'=>'Child Care','sports'=>'Sports','beach cleanup'=>'Beach Cleanup','teaching'=>'Teaching')) !!}

						{!!Form::Label('interest4', 'Interest 4') !!}
						{!!Form::select('interest4', array('animal care'=>'Animal Care','senior citizens care'=>'Senior Citizen Care','child care'=>'Child Care','sports'=>'Sports','beach cleanup'=>'Beach Cleanup','teaching'=>'Teaching')) !!}

						{!!Form::Label('interest5', 'Interest 5') !!}
						{!!Form::select('interest5', array('animal care'=>'Animal Care','senior citizens care'=>'Senior Citizen Care','child care'=>'Child Care','sports'=>'Sports','beach cleanup'=>'Beach Cleanup','teaching'=>'Teaching')) !!}
					</p>
					{!!Form::submit('Sign Up') !!}
				{!! Form::close() !!}
				</div>
				<section class="w3-container">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				</section>
            </div>
        </div>
    </body>
    @endsection
</html>
