@extends('layouts.main')
@section('container')
<!--Main-->
<div class="container py-20  mx-auto flex flex-wrap flex-col md:flex-row items-center">
<div class="container flex justify-center content-center items-center">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-white shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <form method="POST" id="registerForm" action="/api/register">
                @csrf
                <div class="max-w-md mx-auto">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold">Register</h1>
                    <a href="/login"> <p class="text-black underline ">Login</p> </a>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative pb-4">
                        <input
                        autocomplete="off"
                        id="name"
                        name="name"
                        type="text"
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                        placeholder="Name"
                        />
                        <label
                        for="name"
                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                        >Name</label
                        >
                    </div>
                    <div class="relative pb-4">
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
                    <div class="relative pb-4">
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
                    <!-- <div class="relative pb-4">
                        <input
                        autocomplete="off"
                        id="confirm_password"
                        name="confirm_password"
                        type="confirm_password"
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                        placeholder="confirm_password"
                        />
                        <label
                        for="confirm_password"
                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                        >Confirm Password</label
                        >
                    </div> -->
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

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Serialize form data
    var formData = new FormData(this);

    // Make AJAX request to register API endpoint
    fetch('/api/register', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Handle the JSON response
        if (data.status_code === 201) {
            // Registration successful, redirect to success page
            window.alert('Registration successful: ' + data.message);
            // window.location.href = '/home';
            // redirect without reloading the page
            window.location.replace('/login');

        } else if (data.error) {
            // Registration failed, display error message(s) to the user
            alert('Registration failed: ' + JSON.stringify(data.error));
        } else {
            console.log(data);
            alert('An error occurred. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error cases
    });
});
</script>

@endsection
