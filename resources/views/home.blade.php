@extends('layouts.main')
@section('container')
<!--Main-->
<div class="container py-24   mx-auto flex flex-wrap flex-col md:flex-row items-center">
<!--Left Col-->
<div class="flex flex-col xl:pl-32 w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
    <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
    Hi 👋🏻
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
        It's {{ $name }} Here
    </span>

    </h1>
    <p class="leading-normal text-white text-base md:text-2xl mb-8 text-center md:text-left">
    Scroll down to know more about me!
    </p>

    <form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
            Subscribe to my blog
        </label>
        <input
        class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
        id="emailaddress"
        type="text"
        placeholder="you@somewhere.com"
        />
    </div>

    <div class="flex items-center justify-between pt-4">
        <button
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
        type="button"
        >
        Sign Up
        </button>
    </div>
    </form>
</div>

<!--Right Col-->
<div class="w-full xl:w-3/5 p-12 overflow-hidden">
    <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="{{ asset('images/macbook.png') }}"/>
</div>


<!--Footer-->
<!-- <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
    <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; App 2020</a>
    - Template by
    <a class="text-gray-500 no-underline hover:no-underline" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a>
</div> -->
</div>
@endsection

