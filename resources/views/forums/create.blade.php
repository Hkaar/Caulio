@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="flex flex-col md:flex-row py-4 items-center justify-center gap-6 h-full px-32">
      <div id="preview" class="flex-1"></div>

      <form method="POST" action="{{ route('forums.store') }}" enctype="multipart/form-data" class="w-fit">
        @csrf

        <div class="mb-4">
          <input class="file-input w-full max-w-xs" id="img" type="file" name="img" accept="image/gif, image/jpeg, image/png, image/jpg">
          
          @error('img')
            <span>{{ $message }}</span>
          @enderror
        </div>
      
        <div class="mb-4">
          <label class="input input-bordered flex items-center gap-2">
            Title
            <input type="text" name="title" id="title" class="grow" placeholder="Builders" required/>
          </label>
          
          @error('title')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-6">
          <label class="form-control">
            Description
            <textarea class="textarea textarea-bordered" id="desc" name="desc"></textarea>
          </label>
          
          @error('desc')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div>
          <a href="{{ route('forums.index') }}" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection