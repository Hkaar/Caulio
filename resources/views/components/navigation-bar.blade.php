<div class="flex h-16 w-full justify-between px-4 py-2 border-b border-gray-400 items-center">
  <div id="brand" class="items-center gap-3 hidden md:flex">
    <img src="{{ URL::asset('assets/imgs/caulio.png') }}" alt="Not available" srcset="" class="size-12 object-cover">
    <h1 class="text-3xl font-bold">
      Caulio
    </h1>
  </div>

  <button class="sideBarToggle outline-none text-xl active:scale-90 delay-100 transition-all hover:scale-110 hover:text-gray-500 md:hidden">
    <i class="fa-solid fa-bars"></i>
  </button>

  <div class="flex items-center gap-3 text-xl">
    <div class="flex items-center gap-1 text-xl">
      @if (auth()->check())
        <div class="dropdown dropdown-bottom dropdown-end">
          <div tabindex="0" role="button" class="flex gap-2 items-center">
            <span class="text-gray-500 text-lg">{{ auth()->user()->name }}</span>
            <img src="{{ Storage::url(auth()->user()->img) }}" alt="Not available" class="rounded-full size-12">
          </div>
          
          <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
            <li>
              <a href="{{ route('logout') }}" class="text-red-600 font-bold">Logout</a>
            </li>
          </ul>
        </div>
      @else
      <a href="{{ route('login') }}" class="btn btn-secondary text-white">
        Login
      </a>
  
      <a href="{{ route('register') }}" class="btn btn-primary text-white">
        Register
      </a>
      @endif
    </div>
  </div>
</div>