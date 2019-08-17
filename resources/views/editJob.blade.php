@extends('index')


@section('content')
@foreach ($editData as $row)
<form action="/home/admin/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $row->id }}">
      <div class="form-group">
          <label for="inputJobName">Job Name</label>
          <input type="name" value="{{$row->josName}}" class="form-control" id="inputJobName" aria-describedby="jobname" placeholder="Enter Job Name" name="jobname">
      </div>
      <div class="form-group">
          <label for="inputJobDescription">Job Description</label>
          <input type="text" value="{{$row->jobDescription}}" class="form-control" id="inputJobDescription" aria-describedby="jobdescription" placeholder="Enter jobdescription" name="jobdescription">
      </div>
      <div class="form-group">
        <label for="inputJobSalary">Job Salary</label>
        <input type="text" value="{{$row->jobsSalary}}" class="form-control" id="inputSalary" aria-describedby="jobsalary" placeholder="Enter Job Salary" name="salary">
      </div>
      <div class="form-group">
          <label for="inputJobCity">Job City</label>
          <input type="text" value="{{$row->jobsCity}}" class="form-control" id="inputJobCity" aria-describedby="jobcity" placeholder="Enter Job City" name="jobcity">
      </div>
      <div class="form-group">
        <label for="companyName">Company Name</label>
        <input type="text" value="{{$row->companyName}}" class="form-control" id="companyName" placeholder="Company Name" name="companyname">
      </div>
      {{-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> --}}
      <input type="submit" value="Update Job" class="btn btn-primary">
      {{-- <a href="/form/process">submit</a> --}}
 </form>
 @endforeach
@endsection