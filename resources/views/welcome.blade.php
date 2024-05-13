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

<section id="promoMsg1" class="bg-slate-300 py-20">
  <div class="container flex justify-between items-center flex-col md:flex-row h-full gap-10">
    <article class="space-y-3 flex-1 text-center md:text-start">
      <h3 class="text-3xl font-bold">
        Community made forums
      </h3>

      <p class="max-w-[80%]">
        Join vibrant communities tailored to your interests. From technology to art, there's a forum 
        for everyone. Dive into discussions curated by passionate individuals who share your enthusiasm.
      </p>
    </article>

    <div class="mockup-window border bg-gray-700 flex-1 w-full">
      <div class="flex flex-col items-center px-4 py-16 bg-white h-full">
        <img src="{{ URL::asset("assets/imgs/forum.png") }}" alt="Not available" srcset="" class="max-w-full max-h-80 object-cover">
      </div>
    </div>
  </div>
</section>

<section id="promoMsg2" class="py-20 bg-slate-800 text-white">
  <div class="container flex justify-between items-center flex-col-reverse md:flex-row h-full gap-10">
    <div class="mockup-window border bg-gray-700 flex-1 w-full">
      <div class="flex flex-col items-center px-4 py-16 bg-white h-full">
        <img src="{{ URL::asset("assets/imgs/topics.png") }}" alt="Not available" srcset="" class="max-w-full max-h-80 object-cover">
      </div>
    </div>

    <article class="space-y-3 flex-1 text-center md:text-start">
      <h3 class="text-3xl font-bold">
        Various topics
      </h3>

      <p class="max-w-[80%]">
        Explore a myriad of topics spanning from the latest trends to timeless classics. Whether 
        you're seeking advice, sharing experiences, or simply engaging in lively debates, Caulio 
        offers a diverse range of discussions to suit your curiosity.
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

<x-footer></x-footer>
@endsection