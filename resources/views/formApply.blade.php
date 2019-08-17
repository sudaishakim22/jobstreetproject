@extends('index')

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css')}}">
</head>

@section('content')
    <div class="container mt-5" style="padding: 20px;">
      <h1 style="text-align: center;">Form Apply</h1>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
        <form action="/form/process" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="inputFirstName">First Name</label>
                <input type="name" class="form-control" id="inputFirstName" aria-describedby="firstName" placeholder="Enter First Name" name="fname">
            </div>
            <div class="form-group">
                <label for="inputLastName">Last Name</label>
                <input type="name" class="form-control" id="inputLastName" aria-describedby="lastname" placeholder="Enter Last Name" name="lname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control" id="inputPhone" aria-describedby="phone" placeholder="Enter Phone Number" name="phone">
            </div>
            <div class="form-group">
              <label for="position">Position</label>
              <input type="text" class="form-control" id="position" placeholder="position" name="position">
            </div>
            <div class="form-group">
                <label for="inputSalary">Salary Requirement</label>
                <input type="text" class="form-control" id="inputSalary" aria-describedby="salary" placeholder="Enter Salary" name="salary">
            </div>
            <div class="form-group">
                <label for="addCV">Add CV</label>
                <input type="file" class="form-control" id="addCV" name="file">
            </div>
            {{-- <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <input type="submit" value="submit" class="btn btn-primary">
            {{-- <a href="/form/process">submit</a> --}}
        </form>
    </div>
@endsection
