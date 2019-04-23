<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Volunteer Profile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                    Volunteer Profile
                </div>

                <div>
				@foreach ($rowMatch as $rowAttribute)
					<p>First Name: {!! $rowAttribute->firstName !!}</p>
					<p>Last Name: {!! $rowAttribute->lastName !!}</p>
					<p>Home Address: {!! $rowAttribute->homeAddress !!}</p>
					<p>Cell Number: {!! $rowAttribute->cellNumber !!}</p>
					<p>Home Number: {!! $rowAttribute->homeNumber !!}</p>
					<p>ID Number: {!! $rowAttribute->idNumber !!}</p>
					<p>Examination Number: {!! $rowAttribute->examNumber !!}</p>
					<p>Email Address: {!! $rowAttribute->emailAddress !!}</p>
					<p>Password: {!! $rowAttribute->password !!}</p>
					<p>Interest 1: {!! $rowAttribute->interest1 !!}</p>
					<p>Interest 2: {!! $rowAttribute->interest2 !!}</p>
					<p>Interest 3: {!! $rowAttribute->interest3 !!}</p>
					<p>Interest 4: {!! $rowAttribute->interest4 !!}</p>
					<p>Interest 5: {!! $rowAttribute->interest5 !!}</p>
						
				@endforeach
                </div>
            </div>
        </div>
    </body>
</html>
