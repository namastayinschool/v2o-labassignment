@extends('layouts.app')


@section('content')
<br>
    <div class="flex-center position-ref full-height">
    <div class="container">
        <div class="container-fluid">
            <h2>Edit Volunteer Record</h2>
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
            <!-- Display the form for editing/updating the volunteer record -->
            {!! Form::open (array('method' => 'PUT', 'url' =>'/interest/' .
						$interest->id))!!}
                    <div class="form-group">
                    </div>

                    <div class="form-group">
                        {!!Form::Label('firstName', 'First Name:') !!}
                        {!!Form::text('firstName', $interest->firstName,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::Label('lastName', 'Last Name:') !!}
                        {!!Form::text('lastName', $interest->lastName,['class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">
                        {!!Form::Label('email', 'E-mail:') !!}
                        {!!Form::text('email', $interest->email, ['class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">
                      {!! Form::Label('interest', "Primary Interest:") !!}

                      {!! Form::select('interest', ['animal care' => 'Animal Care',
                                                'senior citizens care' => 'Senior Citizens Care',
                                                'child care' => 'Child Care',
                                                'sports' => 'Sports'], null, ['class'=>'form-control'])!!}
                      </div>

            <div class="form-group">
                {!!Form::submit('Update',['class'=>'btn btn-outline-primary btn-block','style' => 'width:100%;' ]) !!}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
