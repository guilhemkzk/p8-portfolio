@extends('layout')


@section('content')
<div class="mb-auto my-16 bg-gray-50 w-full">

    @if(!empty($alertMsg))
        <div class=" mb-8 w-full text-base text-justify flex justify-center text-zinc-950 font-extrabold bg-red-800">
            {{ $alertMsg }}
        </div>
    @endif


    <!-- Home Section -->
    <section class="py-16  bg-zinc-950 w-full" id="home">
        <div class=" mt-6 h-80 mx-10 ">
            <p class="text-amber-100 text-base font-semibold" >Bonjour, je suis</p>
            <h1 class="text-amber-400 text-5xl font-semibold mx-3 py-3" >Guilhem Krewcun</h1>
            <p class="text-amber-100 text-base font-semibold">Je fabrique des sites webs et cartes.</p>
        </div>
    </section>


    <x-returnBtn>
    </x-returnBtn>

    <!-- 01. About Section -->
    <section class="container bg-zinc-950 text-amber-100 py-10 my-10 mr-40 md:mr-20 sm:mr-10 rounded-r-lg w-full" id="about">
        <div class="container mx-8 py-6 w-fit">
            <div class= "container text-amber-400 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold">01. A propos</h2>
            </div>

            <p class="container text-base leading-relaxed text-justify flex flex-auto w-fit">
                Passioné de code et de développement depuis l'adolescence, j'ai commencé à exercer dans le domaine des sciences en Matlab puis en Python, appliqué au traitement d'image et au machine learning.
                J'ai ensuite travaillé dans le domaine de la géomatique et de la gestion de bases de données avant me tourner vers les applications web en PHP et JS.
                <br><br>
                Aujourd'hui, j'utilise ce parcours pluridisciplinaire pour aborder les questions sous plusieurs angles et trouver les meilleures réponses, où qu'elles soient.
            </p>
        </div>
    </section>

    <!-- 02. Experience Section -->
    <section class="container bg-gray-200 py-10 my-10 ml-40 md:ml-20 sm:ml-10 rounded-l-lg w-full" id="experience">
        <div class="container mx-8 w-fit">
            <div class= "container  text-zinc-950 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold">02. Compétences</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <!-- Example Expérience Card -->
                <div class="bg-zinc-950 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-gray-50">Expérience 1</h3>
                    <p class="text-gray-50">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-amber-400 hover:underline mt-4 inline-block">Voir</a>
                </div>
                <div class="bg-zinc-950 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-gray-50">Expérience 1</h3>
                    <p class="text-gray-50">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-amber-400 hover:underline mt-4 inline-block">Voir</a>
                </div>
                <div class="bg-zinc-950 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-gray-50">Expérience 1</h3>
                    <p class="text-gray-50">A description of expérience 1 goes here.</p>
                    <a href="#" class="text-amber-400 hover:underline mt-4 inline-block">Voir</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 03. Projects Section -->
    <section class="container bg-zinc-950 text-amber-100 py-10 my-10 mr-40 md:mr-20 sm:mr-10 rounded-r-lg w-full" id="project">
        <div class="container mx-8 w-fit">
            <div class= "container  text-amber-400 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold" >03. Projets</h2>
            </div>

            <div class="max-w-5xl mx-auto my-20">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($projects as $project)
                        <div class="bg-white rounded-md overflow-hidden shadow-md">
                            <img src={{ $project->url_img }} alt={{ $project->name }} class="object-cover">
                            <h4 class="mx-8 mt-8 font-bold text-zinc-950 text-xl">{{ $project->name }}</h4>
                            <p class="mx-8 mb-8 text-xs text-amber-400">{{ $project->tags }}</p>
                            <p class="mx-8 mb-8 text-xs leaning-relaxed text-justify text-gray-800 leading-relaxed">{{ $project->description }}</p>
                            <a href={{ $project->url }} target="_blank" class="rounded-md bg-zinc-600 text-white font-semibold flex justify-center mx-4">Visiter</a>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Ecrit par @gkwn, {{ date('d m Y', strtotime($project->created_at)) }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- 04. Contact Section -->
    <section class="container bg-gray-200 py-10 my-10 ml-40 md:ml-20 sm:ml-10 rounded-l-lg w-full" id="contact">
        <div class="container mx-8">
            <div class="text-zinc-950 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold ">04. Contact</h2>
            </div>
            <div class="container flex flex-column justify-center w-full mx-2">
                <x-form>
                </x-form>
            </div>
        </div>     
    </section>

</div>
@endsection



