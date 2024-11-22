@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-700 text-white rounded-md">
    <nav class="flex justify-center items-center p-4 shadow-md">
        <h1 class="text-2xl font-bold italic text-center">
            Contact Us
        </h1>
    </nav>

    <div class="max-w-3xl mx-auto p-8">
        <h2 class="text-center text-3xl font-bold mb-3">Get in Touch</h2>
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-lg font-semibold">Name</label>
                <input
                    type="text"
                    name="name"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    placeholder="Enter your name..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Age</label>
                <input
                    type="text"
                    name="age"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    placeholder="Enter your age..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Occupation</label>
                <input
                    type="text"
                    name="occupation"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    placeholder="Enter your occupation..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Mobile Number</label>
                <input
                    type="text"
                    name="mobile_no"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    placeholder="Enter your mobile number..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Email</label>
                <input
                    type="email"
                    name="email"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    placeholder="Enter your email..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Message</label>
                <textarea
                    name="message"
                    class="w-full border p-2 bg-gray-200 text-black rounded-md placeholder-gray-500"
                    rows="4"
                    placeholder="Enter your message..."
                ></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
