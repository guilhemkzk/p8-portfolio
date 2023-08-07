<!-- component -->
  <nav class="fixed top-0 w-full bg-zinc-950 shadow-md w-screen text-gray-400" 
       {{-- x-data="navbar()"  --}}
       @scroll.window="navbarVisibility()"
       x-show="isNavbarVisible"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="transform -translate-y-48 md:-translate-y-16"
       x-transition:enter-end="transform translate-y-0"
       x-transition:leave="transition ease-in duration-300"
       x-transition:leave-start="transform translate-y-0"
       x-transition:leave-end="transform -translate-y-48 md:-translate-y-16"
  >
      <div class="relative max-w-5xl p-4 mx-auto md:px-0 md:flex md:justify-between md:items-center" 
           @click.away="isHamburgerMenuVisible = false"
      >
          <div class="flex items-center justify-between">
              <!-- Brand -->
              <a href="/"
                 class="transition duration-500 ease-in-out transform hover:scale-110">
                  <div class="flex items-center">
                  <span class="text-2xl text-gray-200 font-extrabold">GK</span>
                  </div>
              </a>
  
              <!-- Mobile: Hamburger -->
              <div class="flex md:hidden">
                  <button type="button" 
                          class="focus:outline-none" 
                          @click="isHamburgerMenuVisible = ! isHamburgerMenuVisible"
                  >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                           class="w-5 text-gray-400 transition duration-500 ease-out fill-current hover:text-green-900">
                          <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                          <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
                      </svg>
                  </button>
              </div>
          </div>
  
          <!-- Menu, if mobile set to hidden -->
          <div :class="isHamburgerMenuVisible ? 'show' : 'hidden'" class="items-center md:flex">
              <div class="flex flex-col items-end md:flex-row md:ml-6 md:items-center">
                  <a href="#about" class="mt-4 text-base font-semibold  text-amber-100 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-amber-400">
                      01. A propos
                  </a>
                  <a href="#experience" class="mt-4 text-base font-semibold  text-amber-100 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-amber-400">
                      02. Compétences
                  </a>
                  <a href="#project" class="mt-4 text-base font-semibold text-amber-100 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-amber-400">
                      03. Projets
                  </a>
                  <a href="#contact" class="mt-4 text-base font-semibold text-amber-100 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-amber-400">
                    04. Contact
                </a>
                 

              </div>
          </div>
      </div>
      <div class="h-1 bg-amber-400 w-full"></div>
  </nav>
