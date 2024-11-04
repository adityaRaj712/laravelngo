{{-- resources/views/about.blade.php --}}

@extends('layouts.app')

@section('title', 'About ShareforCare')

@section('content')
<div class="container mx-auto p-8 text-white">
    <h1 class="text-4xl font-bold text-center mb-8">About ShareforCare</h1>

    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4">Our Mission</h2>
        <p class="text-lg">
            At ShareforCare, we believe in the power of compassion to transform lives. Our mission is to create a world where no one is left behind – where children have opportunities to thrive, the elderly live with dignity, and animals receive the care they deserve.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4">Who We Are</h2>
        <p class="text-lg">
            ShareforCare is a non-governmental organization (NGO) dedicated to improving the lives of vulnerable populations across the globe. Founded in [year], we have grown from a small group of passionate volunteers to an international network of caregivers, donors, and supporters united by a common goal: to share our care with those who need it most.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4">What We Do</h2>
        <p class="text-lg">Our work spans three key areas:</p>
        
        <h3 class="text-2xl font-semibold mt-4">Children's Welfare</h3>
        <ul class="list-disc list-inside ml-6 mb-4">
            <li>Education and skill development</li>
            <li>Nutrition and healthcare</li>
            <li>Emotional support and mentorship</li>
            <li>Safe living environments</li>
        </ul>

        <h3 class="text-2xl font-semibold mt-4">Elder Care</h3>
        <ul class="list-disc list-inside ml-6 mb-4">
            <li>Medical care and health monitoring</li>
            <li>Companionship programs</li>
            <li>Assisted living support</li>
            <li>Lifelong learning opportunities</li>
        </ul>

        <h3 class="text-2xl font-semibold mt-4">Animal Welfare</h3>
        <ul class="list-disc list-inside ml-6">
            <li>Rescue and rehabilitation services</li>
            <li>Veterinary care</li>
            <li>Shelter and nutrition</li>
            <li>Adoption programs</li>
        </ul>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4">Our Approach</h2>
        <p class="text-lg">ShareforCare operates on the principle that sustainable change comes through:</p>
        <ol class="list-decimal list-inside ml-6 mb-4">
            <li><strong>Direct Intervention:</strong> We provide immediate relief and long-term support to those in our care.</li>
            <li><strong>Community Empowerment:</strong> We work with local communities to build capacity and foster self-reliance.</li>
            <li><strong>Global Awareness:</strong> We raise awareness about the challenges faced by our beneficiaries and inspire others to take action.</li>
            <li><strong>Sustainable Practices:</strong> We implement eco-friendly and financially sustainable programs to ensure long-term impact.</li>
        </ol>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4">Our Impact</h2>
        <p class="text-lg">Since our inception, ShareforCare has:</p>
        <ul class="list-disc list-inside ml-6 mb-4">
            <li>Supported over [X] children in [Y] countries</li>
            <li>Provided care for [Z] elderly individuals</li>
            <li>Rescued and rehomed [W] animals</li>
        </ul>
        <p class="text-lg">
            But numbers only tell part of the story. Our true impact lies in the smiles we've brought to children's faces, the comfort we've provided to the elderly, and the second chances we've given to animals in need.
        </p>
    </section>

    <section class="mb-12 text-center">
        <h2 class="text-3xl font-semibold mb-4">Join Us</h2>
        <p class="text-lg mb-4">Whether through sponsorship, volunteering, or spreading awareness, there are many ways to be part of the ShareforCare family. Together, we can create a world where care knows no boundaries.</p>
        <button class="text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" onclick="window.location.href='/sponsor'">Get Involved</button>
        <button class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" onclick="window.location.href='/donate'">Donate Now</button>
    </section>
</div>
@endsection
