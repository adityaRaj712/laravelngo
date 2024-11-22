<!-- resources/views/sponsor/confirmation.blade.php -->
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-700 text-white flex flex-col justify-center rounded-md items-center">
    <h2 class="text-2xl font-bold mb-4">Thank you for your sponsorship!</h2>
    <p class="mb-4">Scan the QR code below to complete your sponsorship process.</p>
    <img src="{{ asset('images/QR1.jpg')}}" alt="QR Code" class="rounded-md shadow-md max-w-xs h-auto mb-4" />
    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Return to Home</a>
</div>
@endsection
