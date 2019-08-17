@extends('index')
<head>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
</head>

@section('content')
    <div class="container">
            <div class="row">
                    <div class="col-6 m-auto">
                      <div class="card mt-3 tab-card">
                        <div class="card-header tab-card-header">
                          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="one-tab" data-toggle="tab" href="#alljobs" role="tab" aria-controls="One" aria-selected="true">All Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#fulltime" role="tab" aria-controls="Two" aria-selected="false">Full Time</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#partime" role="tab" aria-controls="Three" aria-selected="false">Part Time</a>
                            </li>
                          </ul>
                        </div>
                        @foreach ($jobsData as $row)
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="card-title">{{ $row->josName }}</h3>
                            <h4 style="color: grey;">{{ $row->companyName }}</h4>
                            <h6><strong>Rp.{{ $row->jobsSalary }}/per bulan</strong></h6>
                            <p class="card-text">{{ $row->jobDescription }}</p>
                            <p>{{ $row->jobsCity }}</p>
                            <a href="/home/detail/{{ $row->companyName}}" class="btn btn-primary">More Detail</a>              
                          </div>
                          {{-- <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <h5 class="card-title">Tab Card Two</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>              
                          </div>
                          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <h5 class="card-title">Tab Card Three</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>              
                          </div> --}}
                        </div>
                        @endforeach
                      </div>
                </div>
        </div>
    </div>
@endsection