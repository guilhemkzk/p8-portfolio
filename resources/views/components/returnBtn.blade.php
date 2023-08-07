<body class="antialiased bg-gray-100" style="font-family: 'Montserrat';">
    <!-- Scroll: testing purposes -->
    {{-- <div x-data="" class="flex justify-center items-center h-screen bg-gray-200">
        <button class="p-6 font-bold text-white text-5xl rounded-sm bg-gray-900 focus:outline-none transition duration-300 hover:bg-gray-700 uppercase" 
                style="font-family: Poppins;"
                @click="window.scrollTo({ top: document.documentElement.clientHeight, behavior: 'smooth' })"
        >
            Scroll
        </button>
    </div> --}}

    {{-- <div class="flex flex-col h-screen items-center justify-center">      
        <div class="bg-white p-8 shadow-md">
            <!-- Title -->
            <h1 class="text-lg font-extrabold">Scroll top fixed button</h1>
            <h2 class="text-sm text-gray-400">Alpine JS & Tailwind CSS</h1>
        </div>             
    </div> --}}

    <div class="fixed bottom-3 right-3"
         x-data="{ currentScrollPosition: window.pageYOffset }"
         x-show="(currentScrollPosition != 0) ? true : false"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 transform -translate-y-48"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in-out duration-500"
         x-transition:leave-start="opacity-100 transform translate-0 rotate-0"
         x-transition:leave-end="opacity-0 transform translate-y-4 rotate-180 opacity-0"
    >
        <button class="focus:outline-none p-3 bg-black bg-opacity-10 rounded-sm z-30 hover:bg-opacity-20 hover:opacity-100 transition duration-300 ease-in-out"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                @scroll.window="currentScrollPosition = window.pageYOffset"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="w-3 h-3 fill-current"
            >
                <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/>
            </svg>
        </button>
    </div>

</body>