@extends('layout/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit a Client
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
      <form method="post" action="{{ route('clients.update', $client->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">First Name:</label>
          <input type="text" class="form-control" name="fname" value={{ $client->fname }} />
        </div>
        <div class="form-group">
          <label for="price">Last Name :</label>
          <input type="text" class="form-control" name="lname" value={{ $client->lname }} />
        </div>
        <div class="form-group">
            <label for="price">Phone Number :</label>
            <input type="text" class="form-control" name="phone" value={{ $client->phone }} />
        </div>
        <div class="form-group">
            <label for="price">Email :</label>
            <input type="text" class="form-control" name="email" value={{ $client->email }} />
        </div>
        <div class="form-group">
            <label for="quantity">Your Gender:</label>
            <select class="form-control" id="sel1" name="gender">
              <option>{{ $client->gender }}</option>
              <option>------</option>
              <option>Male</option>
              <option>Female</option>
            </select>            
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $client->share_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection