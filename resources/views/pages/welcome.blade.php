@extends('layouts.home')
@section('content')

<div class="px-20 md-lg:px-16">
<div class="flex flex-col items-center lg:items-start justify-center text-center w-full">
    <img src="{{ asset('centre_national.png') }}" alt="Centre National des Tests Psychotechniques" class="w-auto h-auto max-w-[200px] md:max-w-[300px]">
</div>

<div class="flex lg:flex-row flex-col items-center justify-center space-x-8 ">
    <!-- Left Content -->
    <div class="flex-1">
        
        <h1 class="md-lg:text-xl text-2xl font-bold font-title mb-2">Test psychotechnique : Récuperez votre permis</h1>
        <h2 class="md-lg:text-lg text-xl font-title text-[#1E1E1E] mb-6">Une démarche simple & rapide</h2>

        <ul class="space-y-2 mb-6">
            <li><i class="fa fa-check-circle px-2 text-green-300 font-light"></i>97.8% de réussite à l'examen psychotechnique</li>
            <li><i class="fa fa-check-circle px-2 text-green-300 font-light"></i>Recevez vos résultats le jour de votre test</li>
            <li><i class="fa fa-check-circle px-2 text-green-300 font-light"></i>Centre enregistré, psychologues certifiés</li>
        </ul>

        <div class="flex-col w-fit">
    <button class="rounded-md px-4 py-2 bg-accent-500 font-bold text-white">
        Je réserve mon test psychotechnique <i class="fa fa-angle-right"></i>
    </button>

    <p class="mt-2 text-center">
        <i class="fa fa-hand-pointer font-light mr-2"></i>Entraînement Gratuit inclus
    </p>
</div>
    </div>

    <!-- Right Video Section -->
    <div class="flex-shrink-0 w-2/5 max-lg:w-full md-lg:w-2/4 lg:justify-center lg:items-center">
        <div class="relative pb-[56.25%] h-0">
            <iframe 
                class="absolute top-0 left-0 w-full h-full" 
                src="https://www.youtube.com/embed/zmjPmzJFEFA" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
</div>

    

@stop

