@extends('layouts.layout')

@section('title', 'View Post')
@section('content')
    <div class="w-full px-40">
        <div class="mt-52 flex justify-between">
            <h1 class=" text-left text-3xl font-semibold capitalize"><a href="/blog" class="font-light ">Post >
                </a>{{ $post->title }}
            </h1>
            <a href="/blog" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Go
                Back</a>
        </div>
        <div class="mt-16  flex flex-col gap-2 border-b border-gray-700 pb-4">
            <h1 class="text-2xl font-bold capitalize mb-2">{{ $post->title }}</h1>
            <p class="text-justify text-lg mb-7">{{ $post->content }}</p>
            <div class="flex justify-between">
                <h1>Created by : <a href="/blog/user/{{ $post->user_id }}"
                        class="font-medium underline capitalize">{{ $post->user->username }}</a></h1>
                <h1>{{ $post->created_at }}</h1>
            </div>
        </div>
    </div>

@stop
