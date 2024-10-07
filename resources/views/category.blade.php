@extends('layout')

@section('content')
    <div class="flex flex-col gap-2 items-center">
        <div class="text-2xl">Posts within <strong>{{$category->name}}</strong> category</div>
            <x-posts :posts="$posts"/>
        </div>
@endsection