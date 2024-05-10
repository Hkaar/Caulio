@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1 max-w-full">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="overflow-x-hidden px-6 py-4 space-y-3">
      <div class="flex justify-between">
        <caption class="table-caption">
          Registered Users
        </caption>

        <a href="{{ route('users.create') }}" class="btn btn-primary">
          Add new user
        </a>
      </div>

      <div class="overflow-x-auto max-w-full w-screen md:w-full">
        <table class="table table-zebra table-lg">
          <thead class="text-base">
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col" class="w-48">Actions</th>
          </thead>
    
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role }}</td>
      
              <td class="flex items-center gap-1">
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info" >
                  Show
                </a>
  
                <button type="button" class="btn btn-error"
                  hx-confirm="Are you sure you want to delete this user?" 
                  hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' 
                  hx-delete="{{ route('users.destroy', $user->id) }}" 
                  hx-target="closest tr" 
                  hx-swap="outerHTML">Delete
                </button>
    
                <a class="btn btn-warning" 
                  href="{{ route('users.edit', $user->id) }}">Edit
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection