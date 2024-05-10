@extends('layouts.app')

@section('title', "Caulio")

@section('content')
<x-navigation-bar></x-navigation-bar>

<section id="hero" class="py-10 h-screen">
  <div class="container h-full flex justify-between items-center">
    <div class="space-y-6">
      <article class="space-y-3">
        <h1 class="text-6xl font-bold">
          Talk & Discuss Anywhere
        </h1>
  
        <h3 class="text-lg">
          Join now to talk and discuss with your friends on caulio!
        </h3>
      </article>
  
      <div class="flex gap-1">
        <a href="#faq" class="btn bg-gray-200">
          More info
        </a>
  
        <a href="{{ route('register') }}" class="btn bg-blue-400">
          Join now!
        </a>
      </div>
    </div>

    <img src="{{ URL::asset('assets/imgs/caulio.png') }}" alt="Not available" class="animate-sink rotate-12 hidden md:block size-96">
  </div>
</section>

<section id="promoMsg1" class="bg-slate-300 py-10">
  <div class="container flex justify-between items-center flex-col md:flex-row h-full gap-10">
    <article class="space-y-3 flex-1 text-center md:text-start">
      <h3 class="text-3xl font-bold">
        Community made forums
      </h3>

      <p>
        Forums made by the community for your interests
      </p>
    </article>

    <div class="mockup-window border bg-gray-700 flex-1 w-full">
      <div class="flex flex-col items-center px-4 py-16 bg-white h-full">
        Forum
      </div>
    </div>
  </div>
</section>

<section id="promoMsg2" class="py-10 bg-slate-800 text-white">
  <div class="container flex justify-between items-center flex-col-reverse md:flex-row h-full gap-10">
    <div class="mockup-window border bg-gray-700 flex-1 w-full">
      <div class="flex flex-col items-center px-4 py-16 bg-white h-full">
        Forum
      </div>
    </div>

    <article class="space-y-3 flex-1 text-center md:text-start">
      <h3 class="text-3xl font-bold">
        Various topics
      </h3>

      <p>
        Various topics for you to talk & discuss about
      </p>
    </article>
  </div>
</section>

<section id="faq" class="py-10">
 <div class="container flex justify-between items-center flex-col md:flex-row h-full gap-10">
  <article class="space-y-3 flex-1 text-center md:text-start">
    <h3 class="text-3xl font-bold">
      FAQ
    </h3>

    <p>
      Here's some of our most commonly asked questions
    </p>
  </article>

  <div class="flex-1 w-full">
    <div class="collapse collapse-arrow bg-base-200">
      <input type="radio" name="my-accordion-2" checked="checked"/> 
  
      <div class="collapse-title text-xl font-medium">
        Why Caulio?
      </div>
  
      <div class="collapse-content"> 
        <p>hello</p>
      </div>
    </div>
  
    <div class="collapse collapse-arrow bg-base-200">
      <input type="radio" name="my-accordion-2"/>
  
      <div class="collapse-title text-xl font-medium">
        How do i join?
      </div>
  
      <div class="collapse-content"> 
        <p>hello</p>
      </div>
    </div>
  
    <div class="collapse collapse-arrow bg-base-200">
      <input type="radio" name="my-accordion-2"/>
  
      <div class="collapse-title text-xl font-medium">
        How do i use it?
      </div>
  
      <div class="collapse-content"> 
        <p>hello</p>
      </div>
    </div>
  </div>
 </div>
</section>

<footer class="bg-slate-800 text-white">
  <div class="container flex justify-between flex-col md:flex-row h-full gap-3 py-10">
    <div class="space-y-3 flex-1">
      <h3 class="text-3xl font-bold">
        Caulio
      </h3>

      <div class="flex flex-col gap-1">
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
      </div>
    </div>

    <div class="space-y-3 flex-1">
      <h3 class="text-3xl font-bold">
        Contact us!
      </h3>

      <div class="flex gap-3 text-2xl">
        <a href="#">
          <i class="fa-brands fa-youtube"></i>
        </a>
      
        <a href="#">
          <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="#">
          <i class="fa-brands fa-twitter"></i>
        </a>
      </div>
    </div>

    <div class="space-y-3 flex-1 hidden md:block">
      <h3 class="text-3xl font-bold">
        Sign up for the newsletter
      </h3>

      <form class="flex">
        <input type="email" placeholder="Enter your email here" class="input input-bordered w-full max-w-xs text-black" />
        <button type="submit" class="btn btn-primary">Signup</button>
      </form>
    </div>
  </div>

  <div class="w-full bg-slate-700 py-3">
    <div class="container flex justify-between items-center flex-col md:flex-row gap-3">
      <span class="font-bold text-center md:text-start">
        &#169; Copyright 2024 Caulio Team. All rights reserved.
      </span>

      <div class="flex gap-3 text-center md:text-start">
        <a href="#">Terms of service</a>
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>
@endsection