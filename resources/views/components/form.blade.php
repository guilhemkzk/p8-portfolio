<body class="antialiased bg-gray-200">
    <div class="flex justify-center items-center">
        <div class="flex-1 max-w-lg p-8 mx-2 bg-white rounded-sm shadow-md">
            <section class="pt-2 pb-4">
                <h1 class="text-xl font-extrabold">Me contacter</h1>
                <p class="text-sm text-zinc-950   ">
                    Renseignez votre email et je prends contact avec vous dès que possible
                </p>
            </section>

            <section class="mt-6">
                <form class="flex flex-col" method="POST" action={{ url('send') }}>
                
                    <!-- Email -->
                    <div class="pt-3 mb-6 bg-zinc-950 rounded-md">
                        <label class="block mx-3 mb-2 text-xs font-bold text-gray-100 " for="email">Email</label>
                        <input type="email"
                               name="email"
                               required
                               class="w-full px-3 pb-3 text-sm text-gray-700 transition duration-300 bg-gray-100 border-b-2 border-gray-200 rounded-sm focus:outline-none focus:border-blue-600 hover:border-blue-300"
                        />
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                  

                    <button type="submit" 
                            class="p-6 mb-4 text-sm font-bold text-zinc-950 transition duration-300 bg-amber-500 rounded-md shadow-sm hover:bg-blue-900 hover:shadow-md">
                        Envoyer
                    </button>
                </form>
            </section>
        </div>
    </div>
</body>
