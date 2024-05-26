      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between ">
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
            D'<span class=" bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Journ</span>
          </a>
          <div class="flex w-2/3 text-lg justify-end items-center content-center gap-5">
            <!-- <a class="leading-normal hover:text-white cursor-pointer  text-indigo-400 m-3 my-5 {{ ($title === 'Projects' ? 'underline' : '' ) }} " href="/projects" >Projects</a> -->
            <a class="leading-normal hover:text-white cursor-pointer  text-indigo-400 m-3 my-5 {{ ($title === 'Blogs' ? 'underline' : '' ) }}" href="/blogs">Blog</a >
            <a class="leading-normal hover:text-white cursor-pointer  text-indigo-400 m-3 my-5 {{ ($title === 'About' ? 'underline' : '' ) }}">About</a>
            <a href="/login">
                <div class="m-3 my-5 leading-normal">
                <button class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="button" > Login </button>
            </div>
            </a>
          </div>
        </div>
      </div>
