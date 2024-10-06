@extends('layout')
@section('content')
<div class="flex flex-col justify-center items-center">
    <h1 class="text-4xl">All Categories</h1>
    <ul>
        @foreach ($categories as $category)
        <li>
            {{$category->name}}
        </li>
        @endforeach
    </ul>
</div>
@endsection