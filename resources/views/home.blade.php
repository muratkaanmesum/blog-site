@extends('layout')

@section('content')
<header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>

            <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"
                                                               alt="Head of Lary the mascot"></h2>

            <p class="text-sm mt-14">
                Another year. Another update. We're refreshing the popular Laravel series with new content.
                I'm going to keep you guys up to speed with what's going on!
            </p>

            <form id="categoryForm" class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8" method="GET" action="#">
    <!--  Category -->
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <select id="categorySelect" name="category" class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
            <option value="" disabled selected>Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </div>
    <!-- Search -->
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
        <button type="submit" class="bg-transparent placeholder-black font-semibold text-sm">
            Find
        </button>
    </div>
</form>

<script>
    document.getElementById('categoryForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var categoryId = document.getElementById('categorySelect').value;
        if (categoryId) {
            window.location.href = '/category/' + categoryId;
        }
    });
</script>
        </header>
    <x-posts :posts="$posts"/>
        </header>
    <x-posts :posts="$posts"/>

@endsection