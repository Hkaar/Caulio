<aside id="sideBar" class="fixed md:relative top-0 h-screen bg-gray-800 text-white -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out z-10 py-4 px-6 min-w-16">
  
  <!-- This is just here just cause of tailwind not registering classes -->
  <div class="min-w-80 hidden"></div>

  <div class="flex flex-col gap-4 justify-center">
    <div class="flex gap-3 items-center justify-between p-2">
      <div class="flex gap-2 items-center">
        <img src="{{ Storage::url(auth()->user()->img) }}" alt="Not available" class="rounded-full size-12">
        <a href="{{ route('logout') }}" class="menu-text text-red-600 hidden">Logout</a>
      </div>

      <button class="sideBarToggle outline-none text-xl active:scale-90 delay-100 transition-all hover:scale-105 hover:text-gray-500 md:hidden">
        <i class="fa-solid fa-x"></i>
      </button>
    </div>

    <hr>

    <div class="flex flex-col gap-4 justify-center items-center">
      <a href="{{ route('users.index') }}" class="flex items-center w-full justify-center gap-2 rounded-md hover:scale-105 p-2 hover:text-gray-400 hover:bg-slate-300 active:scale-90 active:text-gray-800 duration-200 ease-in-out transition-all">
        <i class="fa-solid fa-user text-xl"></i>
        <span class="menu-text hidden me-auto">Users</span>
      </a>

      <a href="{{ route('forums.index') }}" class="flex items-center w-full justify-center gap-2 rounded-md hover:scale-105 p-2 hover:text-gray-400 hover:bg-slate-300 active:scale-90 active:text-gray-800 duration-200 ease-in-out transition-all">
        <i class="fa-solid fa-newspaper text-xl"></i>
        <span class="menu-text hidden me-auto">Forums</span>
      </a>

      <a href="{{ route('posts.index') }}" class="flex items-center w-full justify-center gap-2 rounded-md hover:scale-105 p-2 hover:text-gray-400 hover:bg-slate-300 active:scale-90 active:text-gray-800 duration-200 ease-in-out transition-all">
        <i class="fa-solid fa-scroll text-xl"></i>
        <span class="menu-text hidden me-auto">Posts</span>
      </a>
      
      <a href="{{ route('comments.index') }}" class="flex items-center w-full justify-center gap-2 rounded-md hover:scale-105 p-2 hover:text-gray-400 hover:bg-slate-300 active:scale-90 active:text-gray-800 duration-200 ease-in-out transition-all">
        <i class="fa-solid fa-comment text-xl"></i>
        <span class="menu-text hidden me-auto">Comment</span>
      </a>
      
      <a href="{{ route('reply.index') }}" class="flex items-center w-full justify-center gap-2 rounded-md hover:scale-105 p-2 hover:text-gray-400 hover:bg-slate-300 active:scale-90 active:text-gray-800 duration-200 ease-in-out transition-all">
        <i class="fa-solid fa-comments text-xl"></i>
        <span class="menu-text hidden me-auto">Replies</span>
      </a>
    </div>
  </div>

</aside>