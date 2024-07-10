@extends('layouts.layout')

@section('title', 'Signup')

@section('content')
    <div class="h-screen w-screen flex justify-center items-center">
        <form method="POST" action="/register" class="flex flex-row flex-wrap w-[40rem] gap-y-4 gap-x-3" autocomplete="off ">
            @csrf
            <div class="flex flex-col grow">
                <label for="username" class="uppercase text-sm mb-1 font-semibold text-zinc-900 ml-2">username</label>
                <input type="text" name="username" id="username" class="border h-14 rounded-lg bg-slate-400 outline-none pl-4"
                        value="{{old('username')}}">
                @error('username')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> 
            {{-- <div class="flex flex-col w-full">
                <label for="name" class="uppercase text-sm mb-1 font-semibold text-zinc-900 ml-2">name</label>
                <input type="text" id="name" name="name" class="border h-14 rounded-lg bg-slate-400 outline-none pl-4" 
                        value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> 
             --}}
            <div class="flex flex-col w-full">
                <label for="email" class="uppercase text-sm mb-1 font-semibold text-zinc-900 ml-2">email</label>
                <input type="text" id="email" name="email" class="border h-14 rounded-lg bg-slate-400 outline-none pl-4" 
                        value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> 
            <div class="flex flex-col w-full">
                <label for="password" class="uppercase text-sm mb-1 font-semibold text-zinc-900 ml-2">password</label>
                <input type="password" name="password" id="password" class="border h-14 rounded-lg bg-slate-400 outline-none pl-4">
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> 
      
            <button class="w-full mt-3 text-white uppercase text-sm font-bold tracking-widest bg-[#FF2D20] rounded-lg h-14">Signup</button>
            <a href="/login" class=" text-zinc-900 text-lg w-full text-right">already have an account?</a>
        </form>
    </div>
@stop