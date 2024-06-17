@extends('front.layouts.app')

@section('main')


<section class="section-0 lazy d-flex bg-image-style dark align-items-center " data-bg="{{ asset('assets/images/banner5.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>Where Gamers Become <span>Legends</span></h1>
                <p>Challenge Accepted, Victory Awaited!</p>
                <div class="banner-btn mt-5"><a href="{{ route('jobs') }}" class="btn btn-primary mb-4 mb-sm-0">Join Now</a></div>
            </div>
        </div>
    </div>
</section>
<section class="section-0 lazy d-flex bg-image-style dark align-items-center "  class="" data-bg="{{ asset('assets/images/banner8.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="" >
                <h1 class="text-center">Games</h1>
                <hr>
                <div class="games d-flex flex-wrap">
                    <div class="">
                        <img src="{{ asset('assets/images/bgmi.jpg') }}" alt="" class="homeCard">
                    </div>
                    <div class="">
                    <img src="{{ asset('assets/images/dota.jpg') }}" alt="" class="homeCard">
                    </div>
                    <div class="">
                        <img src="{{ asset('assets/images/cs.jpg') }}" alt="" class="homeCard">
                    </div>
                    <div class="">
                        <img src="{{ asset('assets/images/valorant.jpg') }}" alt="" class="homeCard">
                    </div>
                    <div class="">
                        <img src="{{ asset('assets/images/bgate.jpg') }}" alt="" class="homeCard">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

{{-- 
<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Join The Challenges</h2>
        <div class="row pt-5">

            @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="{{ route('jobs').'?category='.$category->id }}"><h3 class="pb-2">{{ $category->name }}</h3></a>
                    <h4 class="pb-2">Ends in {{ $category->remaining }} days</h4></a>
                    <p class="mb-0"> <span>0</span> Available position</p>
                    <button class="btn btn-success">Join Now</button>
                </div>
            </div> 
            @endforeach                
            @endif
        </div>
    </div>
</section> --}}

<section class="section-3  py-5"  data-bg="{{ asset('assets/images/ghostrunner.jpg') }}">
    <div class="container">
        <h2>New Challenges</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        @if ($latestJobs->isNotEmpty())
                            @foreach ($latestJobs as $latestJob)
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $latestJob->title }}</h3>
                                        
                                        <p>{{ Str::words(strip_tags($latestJob->description), 8) }}</p>

                                        <div class="bg-light p-3 border">
                                            {{-- <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $latestJob->location }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">{{ $latestJob->jobType->name }}</span>
                                            </p> --}}
                                            @if (!is_null($latestJob->salary))
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">Ends in <b>{{ $latestJob->salary }}</b> Days</span>
                                            </p>
                                            @endif                                            
                                        </div>
    
                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobDetail',$latestJob->id) }}" class="btn btn-primary btn-lg">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- 
<section class="section-3 bg-2 py-5">
    <div class="container">
        <h2>Latest Jobs</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        @if ($latestJobs->isNotEmpty())
                            @foreach ($latestJobs as $latestJob)
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $latestJob->title }}</h3>
                                        
                                        <p>{{ Str::words(strip_tags($latestJob->description), 5) }}</p>

                                        <div class="bg-light p-3 border">
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $latestJob->location }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">{{ $latestJob->jobType->name }}</span>
                                            </p>
                                            @if (!is_null($latestJob->salary))
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                <span class="ps-1">{{ $latestJob->salary }}</span>
                                            </p>
                                            @endif                                            
                                        </div>
    
                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobDetail',$latestJob->id) }}" class="btn btn-primary btn-lg">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif                                                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection