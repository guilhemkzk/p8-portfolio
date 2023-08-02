@extends('layout')


@section('content')
<div class="page">

    <div class="container">
        <div class = "page-zero bg-light text-dark">
            <div class="intro">
                <div class="intro-general">
                    <span>Bonjour, je suis</span>
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
        
        
    </div>

</div>
@endsection



