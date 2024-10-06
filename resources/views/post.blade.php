@props(['post'])
@extends('layout')
@section('content')
<div class="w-4/5 m-auto">
    <div class="">
        <h1 class="text-4xl">{{$post->title}}</h1>
        <div class="flex justify-between">
            <span class="text-sm">{{$post->category->name}}</span>
            <a href="/author/{{$post->author->id}}" class="hover:underline">By {{$post->author->name}}</a>
        </div>
    </div>
    <article>
        <p>
            {{$post->content}}
        </p>
    </article>
</div>
@endsection

