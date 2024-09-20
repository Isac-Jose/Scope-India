@extends('layout')

@section('title','Home')

@section('page')

<div class="home-bg">
    <div class="home-logo">
        <img src="{{ asset('images/custom-logo.png') }}" alt="logo">
    </div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('images/scope-1.jpg') }}" class="d-block w-100" alt="First slide">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/scope-2.jpg') }}" class="d-block w-100" alt="Second slide">
                    </div>
                    <div class="col-4">
                        <a href="#"> <img src="{{ asset('images/scope-3.jpg') }}" class="d-block w-100" alt="Third slide"></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('images/scope-4.jpg') }}" class="d-block w-100" alt="Fourth slide">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/scope-5.jpg') }}" class="d-block w-100" alt="Fifth slide">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/scope-6.jpg') }}" class="d-block w-100" alt="Sixth slide">
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="home-sect2">
    <img src="{{asset('images/5star.png')}}" alt="" style="height: 100px;">
    <p class="lead">Google 4.9 * Rated Institute</p>
    <h2>SCOPE INDIA, your career partner!</h2>
    <h3>One of India's best Training destinations for Software, Networking, and Cloud Computing courses with 17 years of Industrial experience.</h3> <br> <br>
    <p class="pg">Software, Networking, and Cloud Professional Education Centre in Kerala and Tamil Nadu from <b>Suffix E Solutions</b> with WORKING PROFESSIONALS oriented on-the-job TRAINING model. SCOPE INDIA provides courses for <b>Software Programming</b> in Python (Data Science | Artificial Intelligence | Machine Learning | Deep Learning, Data Analytics), Java, PHP, .Net, MERN, <b>Software Testing</b> Manual and Automation,<b> Cloud Computing</b> (AWS | Azure), <b>Server Administration</b> (MicroSoft MCSE | Linux RHCE), Networking (CCNA), <b>DevOps, Mobile App Development</b> in Flutter, and <b>Digital Marketing</b> . A Training with a 100% Trusted Job-Based Internship Model. SCOPE INDIA has a Strong Placement Cell that provides jobs to thousands of students annually. We assure you, you won't regret it after training from SCOPE INDIA!</p>
    <p class="pg mt-2">This is how SCOPE INDIA can support both newbies and those experienced in the industry to upgrade their skills.</p>
</div>

<div class="home-sect3 container-fluid">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src="{{asset('images/selection-icon1.png')}}" alt="icon1">
                <h2 class="display-3">Training</h2>
                <p class="lead">You are trained under Suffix E Solutions working professionals, on-the-job training model.</p>
            </div>
            <div class="col">
                <img src="{{asset('images/selection-icon2.png')}}" alt="icon2">
                <h2 class="display-3">Internship</h2>
                <p class="lead">After course completion, you will be proceeded to live projects with a 6 months experience certificate.</p>
            </div>
            <div class="col">
                <img src="{{asset('images/selection-icon3.png')}}" alt="icon3" style="height: 65px;">
                <h2 class="display-3">Grooming</h2>
                <p class="lead">CV Preparation, Interview Preparation, and Personality Development.</p>
            </div>
            <div class="col">
            <img src="{{asset('images/selection-icon4.png')}}" alt="icon4">
                <h2 class="display-3">Placement</h2>
                <p class="lead">Gives 100% FREE placement support to all our fellow techies through SCOPE INDIA's Placement Cell.</p>
            </div>
        </div>
    </div>
</div>




@endsection