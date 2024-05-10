@extends('layouts.app')

@section('title', 'Dashboard - Posts')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="container overflow-y-hidden py-4 h-full flex flex-col gap-3">
      <a href="{{ route('reply.index') }}" class="text-xl hover:text-gray-300 active:text-gray-600 duration-200 transition-all">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back</span>
      </a>

      <div class="flex flex-col md:flex-row items-center justify-between gap-10 h-full">
        <div class="flex items-center justify-center flex-1 size-full">
          Reply preview is supposed to be here
        </div>

        <div class="flex flex-col justify-center gap-3 flex-1 size-full">
          <div class="px-6 py-4 shadow-sm bg-slate-50">
            <strong>Comment ID</strong>
            <p>{{ $reply->comment_id }}</p>
          </div>

          <div class="px-6 py-4 shadow-sm bg-slate-50">
            <strong>Username</strong>
            <p>{{ $reply->user->name }}</p>
          </div>

          <div class="px-6 py-4 shadow-sm bg-slate-50">
            <strong>Content</strong>
            <p>{{ $reply->content }}</p>
          </div>

          <div class="flex gap-2 mt-4">
            <a href="{{ route('reply.index') }}" class="btn btn-error text-white"
              hx-confirm="Are you sure you want to delete this comment?" 
              hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' 
              hx-delete="{{ route('reply.destroy', $reply->id) }}">Delete
            </a>

            <a class="btn btn-warning text-white" 
              href="{{ route('reply.edit', $reply->id) }}">Edit
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection