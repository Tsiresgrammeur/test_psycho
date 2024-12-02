@extends('layouts.home')
@section('content')
    <div id="app">
    </div>
    <div class="flex flex-col lg:flex-row items-center justify-center px-4 lg:px-16 py-8 bg-white">
    <!-- Left Section -->
    <div class="flex flex-col items-center lg:items-start lg:flex-1 lg:pr-8">
        <div class="relative">
            <!-- Phone Image -->
            <img 
                src="https://fakeimg.pl/500x500/?text=Phone&font=lobster" 
                alt="Phone Image" 
                class="rounded-lg shadow-lg"
            />
            <!-- User Image (circular overlay) -->
            <div class="absolute top-16 -right-24 w-24 h-24 lg:w-48 lg:h-32 bg-white rounded-full shadow-lg flex items-center justify-center">
                <img 
                    src="https://fakeimg.pl/297x297/?text=User&font=lobster" 
                    alt="User Image" 
                    class="rounded-full"
                />
            </div>
        </div>
    </div>

    <!-- Right Section -->
    <div class="lg:flex-1 flex-grow lg:mt-0 lg:pl-8 text-center lg:text-left">
        <h2 class="text-2xl mb-16 lg:text-3xl font-title font-bold text-accent-500">
            Votre test psychotechnique en 3 étapes :
        </h2>
        <ul class="space-y-3 text-gray-700 px-8">
            <li class="flex items-start">
                <span class="flex font-bold font-title items-center justify-center w-12 h-10 bg-white text-accent-500 rounded-full text-xl shadow-lg opacity-100 mr-4">
                    1
                </span>
                <p class="font-title text-lg w-full">
                    <span class="font-semibold">Réservez en ligne :</span> Choisissez votre créneau horaire et votre psychologue agréé.
                </p>
            </li>
            <li class="flex items-start">
                <span class="flex font-bold font-title items-center justify-center w-12 h-10 bg-white text-accent-500 rounded-full text-xl shadow-lg opacity-100 mr-4">
                    2
                </span>
                <p class="font-title text-lg w-full"> 
                    <span class="font-semibold">Passez votre test :</span> Vous serez accueilli par un de nos psychologues qui vous expliquera le déroulement du test.
                </p>
            </li>
            </li>
            <li class="flex items-start">
                <span class="flex font-bold font-title items-center justify-center w-12 h-10 bg-white text-accent-500 rounded-full text-xl shadow-lg opacity-100 mr-4">
                    3
                </span>
                <p class="font-title text-lg w-full"> 
                    <span class="font-semibold">Recevez vos résultats :</span> Vous recevrez vos résultats le jour même de votre test.
                </p>
            </li>
        </ul>
        <div class="mt-8">
            <button class="bg-pink-500 text-white px-6 py-3 rounded-md shadow-lg hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-400">
                Je réserve mon test psychotechnique <i class="fa fa-angle-right"></i>
            </button>
        </div>
    </div>
</div>
