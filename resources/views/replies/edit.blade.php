@extends('layouts.app')

@section('title', 'Dashboard - Replies')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="flex flex-col md:flex-row py-4 items-center justify-center gap-6 h-full px-32">
      <div id="preview" class="flex-1"></div>

      <form method="POST" action="{{ route('reply.update', $reply->id) }}" class="flex-1">
        @csrf
        @method('PUT')

        <div class="mb-4 form-control">
          <label for="comment_id">
            Comment ID
          </label>

          <input type="number" name="comment_id" id="comment_id" class="input input-bordered" placeholder="{{ $reply->comment_id }}"/>
          
          @error('comment_id')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4 form-control">
          <label for="user">
            Username
          </label>

          <input type="text" name="user" id="user" class="input input-bordered" placeholder="{{ $reply->user->name }}"/>
          
          @error('user')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div class="mb-6 form-control">
          <label for="content">
            Content
          </label>

          <textarea class="textarea textarea-bordered" id="content" name="content" placeholder="{{ $reply->content }}"></textarea>
          
          @error('content')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div>
          <a href="{{ route('reply.index') }}" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection