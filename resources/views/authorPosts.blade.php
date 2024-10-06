@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl">Blogs by {{$author->name}}</h1>
    <ul>
       @foreach ($posts as $post)
        <li>
            <a href="/post/{{$post->id}}" class="hover:underline" href="">{{$post->title}}</a>
        </li>
       @endforeach
    </ul>
</div>
@endsection