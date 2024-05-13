<aside id="sideBar" class="fixed md:relative top-0 h-screen bg-zinc-700 text-white -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out z-10 py-4 px-6 w-full md:max-w-64">
  
  <!-- This is just here just cause of tailwind not registering classes -->
  <div class="min-w-80 hidden"></div>

  <div class="flex flex-col gap-4 justify-center items-center">
    <div class="md:hidden flex justify-between items-center w-full mb-6">
      <div class="flex flex-1 items-center gap-2">
        <img src="{{ URL::asset('assets/imgs/caulio.png') }}" alt="Not available" class="size-12 object-cover">
        <h1 class="text-3xl font-bold">
          Caulio
        </h1>
      </div>

      <button class="sideBarToggle outline-none text-xl active:scale-90 delay-100 transition-all hover:scale-105 hover:text-gray-500 md:hidden size-fit">
        <i class="fa-solid fa-x"></i>
      </button>
    </div>

    <a href="#" class="btn bg-gray-800 text-white border-none w-full">
      <i class="fa-solid fa-home"></i>
      Home
    </a>

    <a href="#" class="btn bg-red-700 text-white border-none w-full">
      <i class="fa-solid fa-fire"></i>
      Trending
    </a>

    <hr class="border border-gray-500 w-full">

    <button class="btn btn-sucess w-full">
      <i class="fa-solid fa-newspaper"></i>
      New forum
    </button>

    <button class="btn w-full">
      <i class="fa-solid fa-door-open"></i>
      Join a forum
    </button>
  </div>
</aside>