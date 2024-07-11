@extends('layouts.layout')

@section('title', 'View Post')
@section('content')
    <div class="w-full px-40">
        <div class="mt-52 flex justify-between">
            <h1 class=" text-left text-3xl font-semibold"><a href="/blog" class="font-bold">My Post</a>
            </h1>
            <a href="/blog/addpost" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Add
                Post</a>
        </div>
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="mt-16 relative flex flex-col gap-2 border-b border-gray-700 pb-4">
                    <h1 class="text-2xl font-bold capitalize mb-2">{{ $post->title }}</h1>
                    <p class="text-justify text-lg mb-7">{{ $post->content }}</p>
                    <h1>{{ $post->created_at }}</h1>
                    <div class="absolute right-0 bottom-1/2 underline ">
                        <a href="/editpost/{{ $post->id }}" class="mr-2">Edit</a>
                        <a href="/delete/ {{ $post->id }}">Delete</a>
                    </div>
                </div>
            @endforeach
        @else
            <h1 class="text-center mt-72 text-3xl font-semibold">You have not Posted yet.</h1>
        @endif
    </div>
@stop
