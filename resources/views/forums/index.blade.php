@extends('layouts.app')

@section('title', 'Dashboard - Forums')

@section('content')
<section class="flex">
  <x-dashboard-side-bar></x-dashboard-side-bar>
  
  <div class="flex flex-col flex-1">
    <x-dashboard-navigation></x-dashboard-navigation>

    <div class="relative overflow-x-auto px-6 py-4 max-w-full">

      <div class="flex justify-between">
        <caption class="table-caption">
          Forums
        </caption>

        <a href="{{ route('forums.create') }}" class="btn btn-primary">
          Add new forum
        </a>
      </div>

      <table class="table table-zebra table-lg">
        <thead class="text-base">
          <th scope="col" class="w-4">ID</th>
          <th scope="col">Title</th>
          <th scope="col" class="w-48">Actions</th>
        </thead>
  
        <tbody>
          @foreach ($forums as $forum)
          <tr>
            <td>{{ $forum->id }}</td>
            <td>{{ $forum->title }}</td>
    
            <td class="flex items-center gap-1">
              <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-info" >
                Show
              </a>

              <button type="button" class="btn btn-error"
                hx-confirm="Are you sure you want to delete this forum?" 
                hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' 
                hx-delete="{{ route('forums.destroy', $forum->id) }}" 
                hx-target="closest tr" 
                hx-swap="outerHTML">Delete
              </button>
  
              <a class="btn btn-warning" 
                href="{{ route('forums.edit', $forum->id) }}">Edit
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection