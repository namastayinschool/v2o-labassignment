@extends('layout')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Volunteer Record</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Volunteer's Interests


                </div>

                <section class="w3-container">
                    @if ($errors->any())
                        <section class="w3-red">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </section>
                    @endif

                </section>
                <form method="post" action="{{ route('interest.store')}}">
                </form>

                <div>
                    {!! Form::open(array('url' => '/interest')) !!}
                        <p>
                        {!! Form::Label('firstName', 'First Name') !!}

                        {!! Form::text('firstName', 'Jane', array('class' => 'form-control')) !!}
                        </p>

                        <p>
                        {!! Form::Label('lastName', 'Last Name') !!}

                        {!! Form::text('lastName', 'Doe', array('class' => 'form-control')) !!}
                        </p>

                        <p>
                        {!! Form::Label('email', 'E-mail') !!}

                        {!! Form::text('email', 'janedoe@gmail.com', array('class' => 'form-control')) !!}
                        </p>

                        <p>
                        {!! Form::Label('interest', "Volunteer's Interest") !!}

                        {!! Form::select('interest', ['animal care' => 'Animal Care',
                                                        'senior citizens care' => 'Senior Citizens Care',
                                                        'child care' => 'Child Care',
                                                        'sports' => 'Sports'], ['class' => 'form-control'])!!}
                        </p>

                        {{Form::submit('Submit', ['class' => 'btn btn-large btn-primary openbutton'])}}
                    {!! Form::close() !!}





                </div>
                @endsection



            </div>
        </div>
    </body>
</html>
