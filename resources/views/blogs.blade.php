@extends('layouts.main')

@section('container')
<div class="container py-24 mx-auto flex flex-wrap flex-col   w-1/2">
    @foreach ($blog_posts as $post)
        <article>
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white hover:text-green-300  cursor-pointer hover:cursor-pointer hover:underline">{{ $post['title'] }}</h2>
                <p class="mt-2 text-blue-400">{{ $post['sub-title'] }}.</p>
                <span class="inline-block bg-pink-500 text-white text-xs px-2 py-1 rounded">#spirituality</span>
                <p class="mt-2 text-gray-400">October 9, 2016</p>
            </div>
            <div class="border-t border-gray-700 my-6"></div>
        </article>
    @endforeach
</div>



@endsection
