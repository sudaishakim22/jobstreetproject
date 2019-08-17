@extends('index')


@section('content')
     <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Job Name</th>
                <th scope="col">Job Description</th>
                <th scope="col">Job Salary</th>
                <th scope="col">Job City</th>
                <th scope="col">Company Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach ($jobsData as $row)
            <tbody>
            <tr>
                <th scope="row">{{ $row->id}}</th>
                <td>{{ $row->josName }}</td>
                <td>{{ $row->jobDescription }}</td>
                <td>{{ $row->jobsSalary }}</td>
                <td>{{ $row->jobsCity }}</td>
                <td>{{ $row->companyName }}</td>
                <td><a href="/home/admin/edit/{{ $row->id}}" class="btn btn-success">Update</a> <a href="/home/admin/delete/{{$row->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            </tbody>
            @endforeach
        </table>

        <div class="container">
                <form action="/home/admin/addJob" method="POST">
                    @csrf
                      <div class="form-group">
                          <label for="inputJobName">Job Name</label>
                          <input type="name" class="form-control" id="inputJobName" aria-describedby="jobname" placeholder="Enter Job Name" name="jobname">
                      </div>
                      <div class="form-group">
                          <label for="inputJobDescription">Job Description</label>
                          <input type="text" class="form-control" id="inputJobDescription" aria-describedby="jobdescription" placeholder="Enter jobdescription" name="jobdescription">
                      </div>
                      <div class="form-group">
                        <label for="inputJobSalary">Job Salary</label>
                        <input type="text" class="form-control" id="inputSalary" aria-describedby="jobsalary" placeholder="Enter Job Salary" name="salary">
                      </div>
                      <div class="form-group">
                          <label for="inputJobCity">Job City</label>
                          <input type="text" class="form-control" id="inputJobCity" aria-describedby="jobcity" placeholder="Enter Job City" name="jobcity">
                      </div>
                      <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="Company Name" name="companyname">
                      </div>
                      {{-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> --}}
                      <input type="submit" value="Add Job" class="btn btn-primary">
                      {{-- <a href="/form/process">submit</a> --}}
                 </form>
        </div>
@endsection