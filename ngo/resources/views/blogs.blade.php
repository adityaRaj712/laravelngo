@extends('layouts.app')

@section('title', 'About ShareforCare')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .heading {
        text-align: center;
        margin-bottom: 20px;
    }

    .heading h1 {
        font-size: 2.5rem;
        margin: 0;
    }

    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-content {
        padding: 15px;
    }

    .card-content h3 {
        font-size: 1.5rem;
        margin: 0 0 10px;
        color: #333;
    }

    .card-content p {
        font-size: 0.9rem;
        color: #666;
        margin: 0;
        line-height: 1.4;
    }

    .read-more {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        font-weight: bold;
        color: #007bff;
        transition: color 0.3s;
    }

    .read-more:hover {
        color: #0056b3;
    }
</style>
</head>
<body>
<div id="navbar"></div>
<div class="container">
    <div class="heading">
        <h1>Our Blogs</h1>
        <p>Explore stories and insights about our journey and impact.</p>
    </div>

    <div class="cards-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="{{ asset('images/hero.jpeg') }}" alt="Blog 1">
            <div class="card-content">
                <h3>Making a Difference</h3>
                <p>Discover how our sponsors are changing lives by supporting children, the elderly, and animals.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="{{ asset('images/elderly.jpg') }}" alt="Blog 2">
            <div class="card-content">
                <h3>Empowering Communities</h3>
                <p>Learn about our efforts in creating sustainable and supportive environments for those in need.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="{{ asset('images/dog.png') }}" alt="Blog 3">
            <div class="card-content">
                <h3>The Power of Giving</h3>
                <p>Explore inspiring stories of kindness and generosity that have touched countless lives.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <img src="{{ asset('images/children.jpg') }}" alt="Blog 4">
            <div class="card-content">
                <h3>Hope and Healing</h3>
                <p>Read about the transformative impact of medical care and emotional support on vulnerable communities.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection