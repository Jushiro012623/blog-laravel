@extends('layouts.layout')

@section('title', 'Blog')
@section('content')
    <div class="w-full px-40 ">
        <div class="mt-52 flex justify-between">
            <h1 class=" text-left text-3xl font-semibold">Blog List</h1>
            <a href="/blog/addpost" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Add Post</a>
        </div>
        @if ($allpost->count())
        
            @foreach ($allpost as $post)
                <div class="mt-16 relative flex flex-col gap-2 border-b border-gray-700 pb-4">
                    <h1 class="text-2xl font-bold capitalize mb-2"><a href="/blog/viewpost/{{ $post->id }}">{{ $post->title }}</a></h1>
                    <p class="text-justify text-lg mb-7">{{ $post->content }}</p>
                    <h1>Created by : <a href="#" class="font-medium underline">Ivan Malik</a></h1>
                    <a href="/blog/viewpost/{{ $post->id }}" class="underline absolute right-0">View Post</a>
                </div>
            @endforeach
            
            <div class="mt-10">
                {{ $allpost->links() }}
            </div>
        @else
            <h1 class="mt-32 text-4xl font-semibold capitalize text-center">No post yet</h1>
            
        @endif
    </div>
    
@stop
