@extends('layouts.app')
@extends('layouts.header')


    <div class="container">
        <h1>Web Developer Portfolio</h1>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@extends('layouts.footer')



