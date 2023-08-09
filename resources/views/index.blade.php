@extends('layout')


@section('content')
<div class="mb-auto my-16 bg-gray-50 w-full">




    <!-- Home Section -->
    <section class="pt-16  bg-zinc-950 flex flex-row justify-between align-middle" id="home">
        <div class=" pb-16 mt-6 min-h-80 mx-10">
            <p class="text-amber-100 md:text-2xl text-lg mb-6 font-semibold" >Bonjour, je suis</p>
            <h1 class="text-amber-400 md:text-9xl text-5xl mb-6 font-semibold mx-3 py-3" >Guilhem Krewcun</h1>
            <p class="text-amber-100 md:text-2xl text-lg font-semibold">Je fabrique des sites webs et cartes.</p>
        </div>
        <div class="max-h-80 overflow-clip flex justify-center items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/White_Globe_Icon.png" alt="">
        </div>
    </section>

    @if (session('alert'))
        <div class=" z-30 mb-8 h-30 w-full text-3xl p-4 text-justify flex justify-center text-zinc-950 font-extrabold bg-{{session('alert.color')}}-400">
            {{ session('alert.body') }}
        </div>
    @endif

    <x-returnBtn>
    </x-returnBtn>


    <!-- 01. About Section -->
    <section class="bg-zinc-950 text-amber-100 py-10 my-10 mr-0 md:mr-40 rounded-r-lg" id="about">
        <div class="container mx-8 py-6 w-fit">
            <div class= "container text-amber-400 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold">01. A propos</h2>
            </div>

            <p class="container text-lg leading-loose text-justify flex flex-auto w-fit">
                Passioné de code et de développement depuis l'adolescence, j'ai commencé à exercer dans le domaine des sciences en Matlab puis en Python, appliqué au traitement d'image et au machine learning.
                J'ai ensuite travaillé dans le domaine de la géomatique et de la gestion de bases de données avant me tourner vers les applications web en PHP et JS.
                <br><br>
                Aujourd'hui, j'utilise ce parcours pluridisciplinaire pour aborder les questions sous plusieurs angles et trouver les meilleures réponses, où qu'elles soient.
            </p>
        </div>
    </section>

    <!-- 02. Experience Section -->
    <section class=" bg-gray-200 py-10 my-10 ml-0 md:ml-40 rounded-l-lg flex justify-center" id="experience">
        <div class="container mx-8 w-fit flex flex-col">
            <div class= "container  text-zinc-950 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold">02. Compétences</h2>
            </div>
            <div class="flex justify-center">
                <div class="flex flex-row flex-wrap justify-evenly ">
                    {{-- grid grid-cols-1 md:grid-cols-5 lg:grid-cols-10 gap-10 --}}
                    @foreach ($skills as $skill)
                        <div class="bg-zinc-950 p-4 m-4 rounded-full w-40 h-40 shadow-md box-content flex flex-col justify-center items-center">
                            <h3 class="text-xl font-semibold mb-2 text-amber-400">{{ $skill->name }}</h3>
                            <img class="w-20 h-20 " src={{ $skill->url }} alt={{ $skill->name }}>
                        </div>
                    @endforeach
    
    
                   
                </div>
            </div>
            
        </div>
    </section>

    <!-- 03. Projects Section -->
    <section class=" bg-zinc-950 text-amber-100 py-10 my-10 mr-0 md:mr-40 rounded-r-lg flex justify-center" id="project">
        <div class="container mx-8 w-fit">
            <div class= "container  text-amber-400 mb-4">
                <h2 class="text-2xl font-semibold" >03. Projets</h2>
            </div>

            <div class="mx-auto my-20">
                <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
                    @foreach ($projects as $project)
                        <div class="bg-gray-50 rounded-md overflow-hidden shadow-md">
                            <img src={{ $project->url_img }} alt={{ $project->name }} class="object-contain">
                            <h4 class="mx-8 mt-8 font-bold text-zinc-950 text-2xl">{{ $project->name }}</h4>
                            <p class="mx-8 text-base leaning-loose text-justify text-zinc-950 h-auto md:h-20">{{ $project->description }}</p>
                            <p class="mx-8 mb-8 first-letter:text-base text-amber-400 font-semibold">{{ $project->tags }}</p>
                            <p class="mx-8 text-xl leaning-loose text-justify text-amber-400 font-semibold">Problématiques et solutions</p>
                            <p class="mx-8 text-base leaning-loose text-justify h-auto md:h-40 my-4 text-zinc-950 ">{{ $project->details }}</p>
                            <a href={{ $project->url }} target="_blank" class=" py-4 rounded-md text-lg bg-amber-400 text-zinc-950 hover:bg-amber-200 font-semibold flex justify-center mx-auto my-8 max-w-xs hover:shadow-md">Visiter</a>
                            <p class="mx-8 mb-8 text-base text-right italic text-gray-400">Ecrit par Guilhem Krewcun, {{ date('d m Y', strtotime($project->created_at)) }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- 04. Contact Section -->
    <section class=" bg-gray-200 py-10 my-10 ml-0 md:ml-40 rounded-l-lg" id="contact">
        <div class=" mx-8">
            <div class="text-zinc-950 w-11/12 mb-4">
                <h2 class="text-2xl font-semibold ">04. Contact</h2>
            </div>
            <div class=" flex flex-column justify-center  mx-2">
                <x-form>
                </x-form>
            </div>
        </div>     
    </section>

</div>
@endsection



