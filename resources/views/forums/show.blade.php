@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="container overflow-y-hidden py-4 flex flex-col gap-3 h-full">
      <a href="{{ route('forums.index') }}" class="text-xl hover:text-gray-300 active:scale-95 active:text-gray-600 duration-200 transition-all">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back</span>
      </a>

      <div class="flex flex-col md:flex-row items-center justify-between gap-10 h-full">
        <div class="flex items-center justify-center flex-1 size-full">
          <img src="{{ Storage::url($forum->img )}}" alt="Not available" class="size-36 md:size-72 rounded-full object-cover">
        </div>

        <div class="flex flex-col gap-3 flex-1 justify-center size-full">
          <div class="px-6 py-4 shadow-sm bg-slate-50">
            <strong>Title</strong>
            <p>{{ $forum->title }}</p>
          </div>

          <div class="px-6 py-4 shadow-sm bg-slate-50">
            <strong>Description</strong>
            <p>{{ $forum->desc }}</p>
          </div>

          <div class="flex gap-2 mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-error text-white"
              hx-confirm="Are you sure you want to delete this forum?" 
              hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' 
              hx-delete="{{ route('forums.destroy', $forum->id) }}">Delete
            </a>

            <a class="btn btn-warning text-white" 
              href="{{ route('forums.edit', $forum->id) }}">Edit
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection