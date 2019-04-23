@extends('layouts.app')


@section('content_title')

@endsection

@section('content')

<!-- Output record for specific volunteer -->
<br>
<h3> Volunteer Record for: {{$interest->lastName}}, {{$interest->firstName}} </h3>
<table class="table table-striped">
  <thead>
      <tr>
        <td>ID</td>
        <td>First name</td>
        <td>Last name</td>
        <td>E-mail</td>
        <td>Primary interest</td>
      </tr>
  </thead>
  <tbody>

      <tr>
          <td>{{$interest->id}}</td>
          <td>{{$interest->firstName}}</td>
          <td>{{$interest->lastName}}</td>
          <td>{{$interest->email}}</td>
          <td>{{$interest->interest}}</td>
      </tr>
  </tbody>
</table>

<button class="btn btn-primary" type="submit" onclick="history.go(-1)">Go Back</button>




@endsection
