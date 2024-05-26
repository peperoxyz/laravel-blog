@extends('layouts.main')
@section('container')
<!--Main-->
<div class="container py-20  mx-auto flex flex-wrap flex-col md:flex-row items-center">
<div class="container flex justify-center content-center items-center">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-white shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <form method="POST"  id="loginForm" action="/api/login" action="/login">
                @csrf
                <div class="max-w-md mx-auto">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold">Login</h1>
                    <a href="/register"> <p class="text-black underline ">Register</p> </a>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
                        <input
                        autocomplete="off"
                        id="email"
                        name="email"
                        type="email"
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                        placeholder="Email address"
                        />
                        <label
                        for="email"
                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                        >Email Address</label
                        >
                    </div>
                    <div class="relative">
                        <input
                        autocomplete="off"
                        id="password"
                        name="password"
                        type="password"
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                        placeholder="Password"
                        />
                        <label
                        for="password"
                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                        >Password</label
                        >
                    </div>
                    <div class="relative">
                        <button type="submit" class="hover:bg-orange-700 bg-black text-white text-lg rounded-md px-4 py-1">Submit</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- script for ajax -->
<script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Collect form data
            var formData = new FormData(this);

            // Send AJAX request
            fetch('/api/login', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(error => { throw error; });
                }
                return response.json();
            })
            .then(data => {
                // Handle the JSON response
                if (data.message) {
                    // Login successful, redirect to the dashboard or home page
                    window.location.href = '/home';
                } else if (data.errors) {
                    // Login failed, display error message(s)
                    alert('Login failed: ' + JSON.stringify(data.errors));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Display a user-friendly message
                alert('An error occurred. Please try again.');
            });
        });
    </script>

@endsection
