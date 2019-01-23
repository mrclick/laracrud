@extends('layout/layout')

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
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Gender</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->fname}}</td>
            <td>{{$client->lname}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->gender}}</td>
            <td><a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('clients.destroy', $client->id)}}" method="post">
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