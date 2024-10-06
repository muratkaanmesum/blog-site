@extends('layout')

@section('content')
<div class="flex justify-center items-center flex-col gap-2">
    <h1 class="text-4xl">All Released Blogs</h1>
    <ul class="flex flex-col gap-4">
        @foreach ( $posts as $post)
            <li class="list-decimal">
                <a href="/post/{{$post->id}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
</div>    
@endsection