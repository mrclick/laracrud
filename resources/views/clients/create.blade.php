@extends('layout/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add a Client
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
      <form method="post" action="{{ route('clients.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Your First Name:</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
          <div class="form-group">            
            <label for="name">Your Last Name:</label>
            <input type="text" class="form-control" name="lname"/>
          </div>
          <div class="form-group">
            <label for="name">Your email:</label>
            <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="name">Phone Number:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          
          <div class="form-group">
              <label for="quantity">Your Gender:</label>
              <select class="form-control" id="sel1" name="gender">
                <option>Male</option>
                <option>Female</option>
              </select>            
          </div>
          <button type="submit" class="btn btn-primary">Add a client</button>
      </form>
  </div>
</div>
@endsection