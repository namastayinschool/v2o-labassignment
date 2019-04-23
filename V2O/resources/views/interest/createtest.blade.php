@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create new volunteer
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('interest.store') }}">
          <div class="form-group">
              @csrf
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="email">E-mail address:</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
            <select name="interests">
                <option value="animal care">Animal Care</option>
                <option value="senior citizens care">Senior Citizens Care</option>
                <option value="child care">Child Care</option>
                <option value="sports">Sports</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
          <button type="reset" class="btn btn-primary">Reset</button>
      </form>
  </div>
</div>
@endsection
