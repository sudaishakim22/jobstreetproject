@extends('index')
<head>
    <link rel="stylesheet" href="{{ asset('css/detail.css')}}">
</head>

@section('content')
    <div class="container mt-3">
        <div class="company-name">
                  <h1>{{$companyData->companyName}}</h1>
              </div>
        <div class="row m-auto border border-primary">
                <div class="col">
                        <h3>Company Profile</h3>
                        <p>{{$companyData->companyProfile}}</p>
                </div>
                <div class="col-md-6">
                        <h3>Company Address</h3>
                        <li>{{$companyData->companyAddress}}</li>
                        <br>
                        <h3>Email</h3>
                        <li>{{$companyData->companyEmail}}</li>
                </div>
                <div class="col-md-12">
                    <h3>Job Description / {{$companyData->jobName}}</h3>
                    <p>{{$companyData->jobDescription}}</p>

                </div>
                {{-- <button  type="button" class="btn btn-primary btn-lg btn-block">Apply Now</button> --}}
                <a href="/form" class="btn btn-primary btn-lg btn-block">Apply Now</a>
        </div>    
    </div>   
@endsection

