@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <br>
  <!-- Output users' interests in a table -->
  <h3> Users' Interests </h3>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First name</td>
          <td>Last name</td>
          <!-- <td>E-mail</td> -->
          <td>Primary interest</td>
        </tr>
    </thead>
    <tbody>
        @foreach($interests as $interest)
        <tr>
            <td>{{$interest->id}}</td>
            <td>{{$interest->firstName}}</td>
            <td>{{$interest->lastName}}</td>
            <!-- <td>{{$interest->email}}</td> -->
            <td>{{$interest->interest}}</td>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
