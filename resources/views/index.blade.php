@extends('layout')


@section('content')
<div class="mb-auto my-16 bg-gray-50">

      <!-- Home Section -->
      <section class="py-16  bg-black bg-[url('/images/background.jpg')]" id="home">
        <div class=" mt-6 h-80 mx-10 ">
            <span class="text-green-100 text-sm font-semibold" >Bonjour, je suis</span>
            <h1 class="text-green-900 text-5xl font-semibold mx-3 py-3" >Guilhem Krewcun</h1>
            <span class="text-green-100 text-sm font-semibold">Je fabrique des sites webs et cartes.</span>
        </div>
    </section>

          <!-- 01. About Section -->
          <section class="container py-6  bg-black my-4 mr-10 rounded-md" id="about">
            <div class="container mx-auto ml-2 py-6 text-green-100">
                <div class= "container  text-green-900 flex flex-row justify-between">
                    <h2 class="text-2xl font-semibold mb-4 ">01. A propos</h2>
                    <a href="#home" class="text-2xl font-extrabold mb-4 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-white">
                        &uarr;
                    </a>
                </div>
               
                <span class="text-sm">Ecrire un parapgraphe pertinent</span>
            </div>
        </section>

    <!-- 02. Experience Section -->
    <section class="bg-gray-200 py-6 my-4 ml-10 rounded-md" id="experience">
        <div class="container mx-auto ml-2">
            <div class= "container  text-green-900 flex flex-row justify-between">
                <h2 class="text-2xl font-semibold mb-4">02. Expérience</h2>
                <a href="#home" class="text-2xl font-extrabold mb-4 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-white">
                    &uarr;
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
        <section class="bg-black text-green-100 py-6 my-4 mr-10 rounded-md" id="project">
            <div class="container mx-auto ml-2">
                <div class= "container  text-green-900 flex flex-row justify-between">
                    <h2 class="text-2xl font-semibold mb-4 " >03. Projets</h2>
                    <a href="#home" class="text-2xl font-extrabold mb-4 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-white">
                        &uarr;
                    </a>
                </div>

                      <!-- Example Project Card -->
              
                <div class="max-w-5xl mx-auto my-20">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-6">
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/236/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">Laravel 8</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">Route Caching</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#php #laravel #news #backend</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 2 hours ago</p>
                        </div>
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/231/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">VueJS 3</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">New features</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#front #vuejs #news #js</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 10 hours ago</p>
                        </div>
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/125/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">Digital Painting</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">Soft edge & hard edge</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#painting #digital #photoshop</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 1 day ago</p>
                        </div>
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/145/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">Alpine JS</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">Minimalist front-end framework</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#front #alpinejs #minimalist #js</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 3 days ago</p>
                        </div>
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/99/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">Argentina</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">San Martin de Los Andes</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#travel #hiking #fresh #inspiration</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 5 days ago</p>
                        </div>
                        <div class="bg-white rounded-sm overflow-hidden shadow-md">
                            <img src="https://picsum.photos/id/366/800/500" alt="" class="object-cover">
                            
                            <h4 class="mx-8 mt-8 font-bold text-xl">Chess</h4>
                            <p class="mx-8 text-xs uppercase font-bold text-gray-400">London system</p>
                            <p class="mx-8 mb-8 text-xs text-blue-400">#chess #opening #system #white</p>
                            <p class="mx-8 mb-8 text-xs text-justify leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia obcaecati optio eaque voluptas exercitationem harum, ab und...</p>
                            <p class="mx-8 mb-8 text-xs text-right italic text-gray-400">Written by @sylent, 30 November 2020</p>
                        </div>
                    </div>            
            
                   
                    <!-- Repeat for other projects -->
                </div>
            </div>
        </section>

    <!-- 04. Contact Section -->
    <section class="py-6 bg-gray-200 my-4 ml-10 rounded-md" id="contact">
        <div class="container mx-auto ml-2">
            <div class= "container  text-green-900 flex flex-row justify-between">
                <h2 class="text-2xl font-semibold mb-4 ">04. Contact</h2>
                <a href="#home" class="text-2xl font-extrabold mb-4 transition duration-200 ease-out md:mx-4 md:mt-0 hover:text-white">
                    &uarr;
                </a>
            </div>
            <p class="text-gray-700">Feel free to get in touch with me. Email: john@example.com</p>
        </div>
    </section>


    {{-- <div class="bg-red-600">
        <div class = "page-zero bg-light text-dark">
            <div class="intro">
                <div class="intro-general">
                   
                    <span class="en">Hi, I am</span>
                    <h1>Guilhem Krewcun</h1>

                </div>

                <div class="intro-summary">
                    <span><h2>Je construis des sites webs</h2></span>
                    <span class="en"><h2>I build websites</h2></span>
                    <span><h2>Je fais aussi des cartes dynamiques</h2></span>
                    <span class="en"><h2>I also create dynamics maps</h2></span>
                </div>

            </div>

        </div>


        <div class="page-one bg-dark text-light" id="page-one">
            <h2>01. A propos</h2>
            <a href="#top">&UpArrowBar;</a>


            <div class="page-one-speech">
                <p>Je suis développeur web blablabla</p>
        </div>

        </div>

        <div class="page-two bg-light text-dark" id="page-two">
            <h2>02. Expérience</h2>
            <a href="#top">&UpArrowBar;</a>


            
        </div>

        
        <div class="page-three bg-dark text-light" id="page-three">
            <h2>03. Travaux</h2>
            <a href="#top">&UpArrowBar;</a>



            <div class="row">

                @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="/projects/{{$project->id}}">{{ $project->name }}</a></h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <a href="#" class="btn btn-light">Voir projet</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
            </div>
            
        </div>

        
        <div class="page-four bg-light text-dark" id="page-four">
            <h2>04. Contact</h2>
            <a href="#top">&UpArrowBar;</a>
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Votre adresse email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Envoyer</button>
              </form>

            
        </div>
        
        
    </div> --}}

</div>
@endsection



