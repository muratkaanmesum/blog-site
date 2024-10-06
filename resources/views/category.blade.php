@extends('layout')

@section('content')
    <div class="w-4/5 m-auto">
        <div class="text-2xl">Posts within {{$category->name}}</div>
        <ul>
            @foreach ($posts as $post)
                <li class="list-decimal ml-8">{{$post->title}}</li>
            @endforeach
        </ul>
    </div>
@endsection