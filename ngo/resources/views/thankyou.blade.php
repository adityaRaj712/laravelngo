<!-- resources/views/contact/thankyou.blade.php -->
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-600 text-white flex flex-col justify-center items-center">
    <h2 class="text-2xl font-bold mb-4">Thank You for Contacting Us!</h2>
    <p class="mb-4">We will get back to you in 2-3 business days.</p>
    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Return to Home</a>
</div>
@endsection
