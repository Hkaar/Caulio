<aside id="sideBar" class="fixed md:relative top-0 h-screen bg-gray-800 
text-white -translate-x-full md:translate-x-0 transition-all 
duration-300 ease-in-out z-10 py-4 px-6 w-full sm:w-64 md:max-w-20">

  <div class="flex flex-col gap-4 justify-center">
    <div class="flex gap-3 items-center justify-between">
      <div class="flex gap-2 items-center">
        <img src="..." alt="Not available" class="rounded-full size-12 md:hidden">
        <i class="fa-solid fa-arrow-right-from-bracket text-xl"></i>
        <a href="{{ route('logout') }}" class="menu-text text-red-600 hidden">Logout</a>
      </div>

      <button class="sideBarToggle outline-none text-xl active:scale-90 delay-100 transition-all hover:scale-110 hover:text-gray-500 md:hidden">
        <i class="fa-solid fa-x"></i>
      </button>
    </div>

    <div class="flex flex-col gap-3">
      <div class="flex gap-2">
        <i class="fa-solid fa-chart-line text-xl"></i>
        <a href="{{ route('users.index') }}" class="menu-text hidden">Users</a>
      </div>
      <div class="flex gap-2">
        <i class="fa-solid fa-newspaper text-xl"></i>
        <a href="{{ route('forums.index') }}" class="menu-text hidden">Forums</a>
      </div>
      <div class="flex gap-2">
        <i class="fa-solid fa-scroll text-xl"></i>
        <a href="{{ route('posts.index') }}" class="menu-text hidden">Posts</a>
      </div>
      <div class="flex gap-2">
        <i class="fa-solid fa-comment text-xl"></i>
        <a href="{{ route('comments.index') }}" class="menu-text hidden">Comment</a>
      </div>
      <div class="flex gap-2">
        <i class="fa-solid fa-comments text-xl"></i>
        <a href="{{ route('reply.index') }}" class="menu-text hidden">Replies</a>
      </div>
    </div>
  </div>

</aside>