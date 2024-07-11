@extends('layouts.layout')

@section('title', 'Users')
@section('content')
    <div class="w-full px-40">
        <div class="mt-52 flex justify-between">
            <h1 class=" text-left text-3xl font-semibold"><a href="/blog" class="font-bold">My Post</a>
                {{-- {{ $userName->username }} --}}
            </h1>
            {{-- <a href="/blog/addpost" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Add
                Post</a> --}}
            {{-- <a href="/blog" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Go
                        Back</a> --}}
        </div>
        <ul class="mt-16 relative flex flex-row gap-2 border-b justify-around border-gray-700 pb-4">
            <li class="text-sm font-bold capitalize mb-2 grow">Name</li>
            <li class="text-sm font-bold capitalize mb-2 grow">Email</li>
            <li class="text-sm font-bold capitalize mb-2 grow">Created at</li>
            <li class="text-sm font-bold capitalize mb-2">Option</li>
        </ul>
        @foreach ($users as $user)
            <ul class="mt-16 relative flex flex-row gap-2 border-b justify-around border-gray-700 pb-4">
                <li class="text-sm font-bold capitalize mb-2 grow">{{ $user->username }}</li>
                <li class="text-sm font-bold capitalize mb-2 grow">{{ $user->email }}</li>
                <li class="text-sm font-bold capitalize mb-2 grow">{{ $user->created_at }}</li>
                <li class="text-sm font-bold capitalize mb-2 underline"><a href="/users/{{ $user->id }}">Delete</a>
                </li>
            </ul>
        @endforeach
    </div>
@stop
