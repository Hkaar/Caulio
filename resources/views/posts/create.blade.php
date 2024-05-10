@extends('layouts.app')

@section('title', 'Dashboard - Posts')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="flex flex-col md:flex-row py-4 items-center justify-center gap-6 h-full px-32">
      <div id="preview" class="flex-1"></div>

      <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="flex-1">
        @csrf

        <div class="mb-4 form-control">
          <label for="forum">
            Forum Title
          </label>

          <input type="text" name="forum" id="forum" class="input input-bordered" placeholder="Builder forum" required/>
          
          @error('forum')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4 form-control">
          <label for="user">
            Username
          </label>

          <input type="text" name="user" id="user" class="input input-bordered" placeholder="Enter username" required/>
          
          @error('user')
            <span>{{ $message }}</span>
          @enderror
        </div>
      
        <div class="mb-4 form-control">
          <label for="title">
            Title
          </label>

          <input type="text" name="title" id="title" class="input input-bordered" placeholder="Post title" required/>
          
          @error('title')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-6 form-control">
          <label for="content">
            Content
          </label>

          <textarea class="textarea textarea-bordered" id="content" name="content"></textarea>
          
          @error('content')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div>
          <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection