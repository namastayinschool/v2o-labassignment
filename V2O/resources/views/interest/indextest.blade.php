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
  <h3> Volunteer Records </h3>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First name</td>
          <td>Last name</td>
          <td>E-mail</td>
          <td>Primary interest</td>

          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($interests as $interest)
        <tr>
            <td>{{$interest->id}}</td>
            <td>{{$interest->firstName}}</td>
            <td>{{$interest->lastName}}</td>
            <td>{{$interest->email}}</td>
            <td>{{$interest->interest}}</td>
            <td><a href="{{ route('interest.show',$interest->id)}}" class="btn btn-info">View</a></td>
            <td><a href="{{ route('interest.edit',$interest->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('interest.destroy', $interest->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
