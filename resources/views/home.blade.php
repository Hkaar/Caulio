@extends('layouts.app')

@section('title', 'Home')

@section('content')
<x-navigation-bar></x-navigation-bar>

<section class="flex h-screen">
<x-home-side-bar></x-home-side-bar>

<div id="main" class="flex-1">
  <div class="flex flex-col">
    <strong>Shava Jaya</strong>

    <p>
      Here'
    </p>
  </div>
</div>
</section>

<x-footer></x-footer>
@endsection
