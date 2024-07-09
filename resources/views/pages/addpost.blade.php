@extends('layouts.layout')

@section('title', 'Add Post')

@section('content')

<div class="w-1/2 m-auto px-40">
    <div class="mt-52 flex justify-between">
        <h1 class=" text-left text-3xl font-semibold">Add Post</h1>
        {{-- <a href="blog/addpost" class=" text-left text-md border py-3 rounded-md border-slate-500 px-6 font-semibold">Save</a> --}}
    </div>
    <form  method="POST" action="/blog/addpost" class="mt-16  gap-10 flex flex-col w-full">
        @csrf
        <div class="flex flex-col gap-1">
            <label for="title" class="text-xl font-medium " >Title</label>
            <input name="title" id="title" class="border h-10 border-slate-500 p-2 outline-none rounded-md resize-none"></input>
        </div>
        <div  class="flex flex-col gap-1" >
            <label for="content" class="text-xl font-medium ">Content</label>
            <textarea name="content" id="content" class="border border-slate-500 h-32 outline-none rounded-md p-2 resize-none"></textarea>
        </div>
        <div>
            <button type="submit" class="w-32 mr-5 text-white tracking-wider rounded-md bg-sky-500 py-2 px-7 text-lg font-medium">Save</button>
            <a href="/blog" class="text-lg font-medium">Cancel</a>
        </div>
    </form>
</div>
@stop