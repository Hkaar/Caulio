@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="flex flex-col md:flex-row py-4 items-center justify-center gap-6 h-full px-32">
      <div id="preview" class="flex-1 flex items-center justify-center">
        <span class="size-36 md:size-72 rounded-full object-cover">Profile image will appear here</span>
      </div>

      <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="flex-1">
        @csrf

        <div class="mb-4">
          <input class="file-input w-full max-w-xs" id="img" type="file" name="img" accept="image/gif, image/jpeg, image/png, image/jpg">
          
          @error('img')
            <span>{{ $message }}</span>
          @enderror
        </div>
      
        <div class="mb-4">
          <label class="input input-bordered flex items-center gap-2">
            Username
            <input type="text" class="grow" id="name" name="name" placeholder="Username" required/>
          </label>
          
          @error('name')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label class="input input-bordered flex items-center gap-2">
            Display Name
            <input type="text" name="display_name" id="display_name" class="grow" placeholder="Casey" required/>
          </label>
          
          @error('display_name')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label class="input input-bordered flex items-center gap-2">
            Email
            <input type="text" id="email" name="email" class="grow" placeholder="Email" required/>
          </label>
          
          @error('email')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label class="input input-bordered flex items-center gap-2">
            Password
            <input id="password" name="password" type="password" class="grow" required/>
          </label>
          
          @error('password')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div class="mb-2">
          <label class="input input-bordered flex items-center gap-2">
            Confirm password

            <input id="password_confirmation" name="password_confirmation" type="password" class="grow" required/>
          </label>
          
          @error('password_confirmation')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="form-control w-full max-w-xs mb-6">
          <div class="label">
            <span class="label-text">User role</span>
          </div>

          <select name="role" id="role" class="select select-bordered">
            <option value="member" selected>Guest</option>
            <option value="admin">Admin</option>
          </select>

          @error('role')
            <span>{{ $message }}</span>
          @enderror
        </div>
    
        <div>
          <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection