@extends('layouts.app')


@section('content')
<br>
    <div class="flex-center position-ref full-height">
    <div class="container">
        <div class="container-fluid">
            <h2>Add New Volunteer</h2>
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
            <!-- Display the form to create a new record and store in database -->
            <form method="post" action="{{ route('interest.store')}}">
            </form>
            {!! Form::open (array('url' => '/interest','class'=>'form-group')) !!}
                    <div class="form-group">
                    </div>

                    <div class="form-group">
                        {!!Form::Label('firstName', 'First Name:') !!}
                        {!!Form::text('firstName', '',['placeholder'=>'Jane','class'=>'form-control'], ['required'] ) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::Label('lastName', 'Last Name:') !!}
                        {!!Form::text('lastName', '',['placeholder'=>'Doe','class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">
                        {!!Form::Label('email', 'E-mail:') !!}
                        {!!Form::text('email', '',['placeholder'=>'janedoe@hotmail.com','class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">
                      {!! Form::Label('interest', "Primary Interest:") !!}

                      {!! Form::select('interest', ['animal care' => 'Animal Care',
                                                'senior citizens care' => 'Senior Citizens Care',
                                                'child care' => 'Child Care',
                                                'sports' => 'Sports'], null, ['class'=>'form-control'])!!}
                      </div>

            <div class="form-group">
                {!!Form::submit('Create',['class'=>'btn btn btn-info','style' => '' ]) !!}
                {{Form::reset('Reset', ['class' => 'btn btn-danger openbutton'])}}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
