<!-- component -->
<nav class="fixed top-0 w-full bg-zinc-950 shadow-md text-gray-400">
    <div class="relative max-w-5xl p-4 mx-auto md:px-0 md:flex md:justify-between md:items-center lg:justify-between">
        <div class="flex items-center justify-between w-full">
            <!-- Brand -->
            <a href="/" class="transition duration-500 ease-in-out transform hover:scale-110">
                <div class="flex items-center">
                    <span class="text-3xl ml-8 text-gray-200 font-extrabold">GK</span>
                </div>
            </a>

            <div class="flex justify-end space-x-7">
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center">
                    <a href="#about" class="mt-4 text-base font-semibold  text-amber-100 transition duration-200 ease-out md:mx-6 md:mt-0 hover:text-amber-400">01. A propos</a>
                    <a href="#experience" class="mt-4 text-base font-semibold  text-amber-100 transition duration-200 ease-out md:mx-6 md:mt-0 hover:text-amber-400">02. Compétences</a>
                    <a href="#project" class="mt-4 text-base font-semibold text-amber-100 transition duration-200 ease-out md:mx-6 md:mt-0 hover:text-amber-400">03. Projets</a>
                    <a href="#contact" class="mt-4 text-base font-semibold text-amber-100 transition duration-200 ease-out md:mx-6 md:mt-0 hover:text-amber-400">04. Contact</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-amber-400 "
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>

        <!-- mobile menu -->
        <div class="z-80 hidden mobile-menu flex flex-col items-end bg-zinc-950">
            <ul class="">
                <li><a href="#about" class="block text-sm px-2 py-4 hover:text-amber-400 transition duration-300">01. A propos</a></li>
                <li><a href="#experience" class="block text-sm px-2 py-4 hover:text-amber-400 transition duration-300">02. Compétences</a></li>
                <li><a href="#project" class="block text-sm px-2 py-4 hover:text-amber-400 transition duration-300">03. Projets</a></li>
                <li><a href="#contact" class="block text-sm px-2 py-4 hover:text-amber-400 transition duration-300">04. Contact</a></li>

            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
  
         
    </div>
    <div class="h-1 bg-amber-400 w-full"></div>
</nav>
