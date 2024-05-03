@extends('layouts.app')

@section('title', "Login")

@section('content')
<div class="bg-gradient-to-br from-primary to-white h-screen w-screen flex">
  <div class="container flex flex-1 flex-col justify-center items-center">
    <form action="{{ route('login') }}" method="post" class="p-6 md:p-12 shadow-md md:border bg-white rounded-md">
      @csrf
  
      <h1 class="font-bold text-4xl mb-8">
        Caulio
      </h1>
  
      <div class="space-y-2 mb-5">
        <label for="email" class="font-bold">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
          class="block p-2 w-[100%] border border-gray-400 focus:ring-4 focus:ring-blue-500 
          focus:outline-none rounded-md active:scale-95 transition-all delay-50"
        required autofocus>
        
        @error('email')
          <span>{{ $message }}</span>
        @enderror
      </div>
  
      <div class="space-y-2 mb-8">
        <label for="password" class="font-bold">Password</label>
        <input id="password" type="password" name="password" 
          class="block w-[100%] p-2 border border-gray-400 focus:ring-4 focus:ring-blue-500 
          focus:outline-none rounded-md active:scale-95 transition-all delay-50"
        required>

        <a class="inline-block text-blue-500" href="">Forgot your password?</a>
       
        @error('password')
          <span>{{ $message }}</span>
        @enderror
      </div>
  
      <div class="flex items-center gap-4">
        <button type="submit" class="outline-none bg-primary text-white px-4 py-2 rounded 
        md:hover:bg-secondary md:hover:scale-105 transition-all delay-75 active:scale-90">
          Login
        </button>
  
        <a class="inline-block text-blue-500 underline" href="{{ route('register') }}">
          Don't have an account?
        </a>
      </div>
    </form>
  </div>
</div>
@endsection