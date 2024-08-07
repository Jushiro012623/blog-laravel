@extends('layouts.layout')

@section('title', 'Blog')
@section('content')
    <div class="w-full px-40 ">
        <div class="mt-52 flex justify-between">
            <h1 class=" text-left text-3xl font-semibold">Blogs</h1>
            @auth
                <a href="/blog/addpost" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Add
                    Post</a>
            @endauth
        </div>
        @if ($allpost->count() > 0)

            @foreach ($allpost as $post)
                <div class="mt-16 relative flex flex-col gap-2 border-b border-gray-700 pb-4">
                    <h1 class="text-2xl font-bold capitalize mb-2"><a
                            href="/blog/viewpost/{{ $post->id }}">{{ $post->title }}</a></h1>
                    <p class="text-justify text-lg mb-7">{{ $post->content }}</p>
                    <h1>Created by : <a href="/blog/user/{{ $post->user_id }}" class="font-medium underline capitalize">
                            @auth
                                @if (auth()->user()->id === $post->user_id)
                                    You
                                @else
                                    {{ $post->user->username }}
                                @endif
                            @endauth
                            @guest
                                {{ $post->user->username }}
                            @endguest
                        </a></h1>

                    <a href="/blog/viewpost/{{ $post->id }}" class="underline absolute right-0">View Post</a>
                    @auth
                        @if (auth()->user()->admin === 1)
                            <h1>{{ $post->created_at }}</h1>
                            <div class="absolute right-0 bottom-5 underline ">
                                <a href="/delete/ {{ $post->id }}">Delete</a>
                            </div>
                        @endif
                    @endauth
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
