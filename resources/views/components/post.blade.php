@extends('layout')
@section('content')
<div>
    <h1>{{$post->title}}</h1>
    <h1 class="bg-red-950">{{$post->category->name}}test</h1>
    <p>{{$post->content}}</p>
</div>
@endsection

