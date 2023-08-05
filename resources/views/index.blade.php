@extends('layout')


@section('content')
<div class="mb-auto my-16 bg-gray-50">

      <!-- Home Section -->
      <section class="py-16  bg-black bg-[url('/images/background.jpg')]" id="home">
        <div class=" mt-6 h-80 mx-10 ">
            <span class="text-green-100 text-sm font-semibold" >Bonjour, je suis</span>
            <h1 class="text-green-800 text-5xl font-semibold mx-3 py-3" >Guilhem Krewcun</h1>
            <span class="text-green-100 text-sm font-semibold">Je fabrique des sites webs et cartes.</span>
        </div>
    </section>

          <!-- 01. About Section -->
          <section class="container py-10 bg-black my-10 mr-40 rounded-md" id="about">
            <div class="container mx-auto ml-2 py-6 text-green-100">
                <div class= "container  text-green-900 flex flex-row justify-between w-11/12 mb-4">
                    <h2 class="text-2xl p-1 font-semibold mr-4 ">01. A propos</h2>
                    <x-returnBtn>
                    </x-returnBtn>
                </div>
               
                <span class="container text-sm m-4">Passioné de code et de développement depuis l'adolescence, j'ai commencé à exercer dans le domaine des sciences en Matlab puis en Python, appliqué au traitement d'image et au machine learning.
                    J'ai ensuite travaillé dans le domaine de la géomatique et de la gestion de bases de données avant me tourner vers les applications web en PHP et JS.
                    Aujourd'hui, j'utilise ce parcours pluridisciplinaire pour aborder les questions sous plusieurs angles et trouver les meilleures réponses, où qu'elles soient.</span>
            </div>
        </section>

    <!-- 02. Experience Section -->
    <section class="bg-gray-200 py-10 my-10 ml-40 rounded-md" id="experience">
        <div class="container mx-auto ml-2">
            <div class= "container  text-green-900 flex flex-row justify-between w-11/12 mb-4">
                <h2 class="text-2xl p-1 font-semibold mr-4 ">02. Expérience</h2>
                <x-returnBtn>
                </x-returnBtn>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-4">
               <!-- Example Expérience Card -->
               <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Expérience 1</h3>
                    <p class="text-black">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-green-900 hover:underline mt-4 inline-block">Voir</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Expérience 2</h3>
                    <p class="text-black">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-green-900 hover:underline mt-4 inline-block">Voir</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Expérience 3</h3>
                    <p class="text-black">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-green-900 hover:underline mt-4 inline-block">Voir</a>
                </div>
            </div>
        </div>
    </section>

        <!-- 03. Projects Section -->
        <section class="bg-black text-green-100 py-10 my-10 mr-40 rounded-md" id="project">
            <div class="container mx-auto ml-2">
                <div class= "container  text-green-900 flex flex-row justify-between w-11/12 mb-4">
                    <h2 class="text-2xl p-1 font-semibold mr-4 " >03. Projets</h2>
                    <x-returnBtn>
                    </x-returnBtn>
                </div>

                      <!-- Example Project Card -->
              
                <div class="max-w-5xl mx-auto my-20">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-6">
                        @foreach ($projects as $project)
                        <div class="bg-white rounded-md overflow-hidden shadow-md">
                            <img src={{ $project->url_img }} alt={{ $project->name }} class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-black text-xl">{{ $project->name }}</h4>
                            <p class="mx-8 mb-8 text-xs text-green-800">#php #laravel #news #backend</p>
                            <p class="mx-8 mb-8 text-xs text-justify text-gray-800 leading-relaxed">{{ $project->description }}</p>
                            <a href={{ $project->url }} target="_blank" class="rounded-md bg-green-900 text-white font-semibold flex justify-center mx-4">Visiter</a>
                    
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @gkwn, {{ $project->updated_at }}</p>
                        </div>

                    @endforeach

            
                   
                    <!-- Repeat for other projects -->
                </div>
            </div>
        </section>

    <!-- 04. Contact Section -->
    <section class="py-10 bg-gray-200 my-10 ml-40 rounded-md" id="contact">
        <div class="container mx-auto ml-2">
            <div class= "container  text-green-900 flex flex-row justify-between w-11/12 mb-4">
                <h2 class="text-2xl p-1 font-semibold mr-4 ">04. Contact</h2>
                <x-returnBtn>
                </x-returnBtn>
            </div>
            <div class="container mx-auto ml-2 flex flex-column justify-center mb-4">
                <p class="p-2 text-gray-700">N'hésitez pas à me contacter</p>
                <a class="p-2 bg-green-900 text-white font-semibold rounded-md text-lg" href="mailto:guilhem.krewcun@gmail.com">Envoyer Email</a>
            </div>


        
           
    </section>

</div>
@endsection



