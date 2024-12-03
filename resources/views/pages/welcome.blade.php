@extends('layouts.home')
@section('content')
    <div id="app" class="w-full">
    </div>
    <div class="flex flex-col lg:flex-row items-center justify-center px-10 xl:px-16 py-8 bg-white">
    <!-- Left Section -->
    <div class="flex flex-row items-center lg:items-start lg:flex-1 xl:pr-6">
        <div class="relative">
            <!-- Phone Image -->
            <div class="w-full max-w-lg">
            <img 
                src="https://fakeimg.pl/669x669/?text=Phone&font=lobster" 
                alt="Phone Image" 
                class="shadow-lg justify-center w-full lg:w-4/5"
            />
            <!-- User Image (circular overlay) -->
</div>
            <div class="absolute top-16 xl:right-8 lg:right-0 max-lg:-left-12 h-24 w-56 lg:w-48 lg:h-32 bg-white rounded-full shadow-2xl flex items-center justify-center">
                <img 
                    src="https://fakeimg.pl/297x297/?text=User&font=lobster" 
                    alt="User Image" 
                    class="rounded-full "
                />
            </div>
        </div>
    </div>

    <!-- Right Section -->
    <div class="lg:flex-1 flex-grow lg:mt-0 text-center lg:text-left">
        <h2 class="mb-16 text-[27px] xl:text-3xl font-title font-bold text-accent-500">
            Votre test psychotechnique en 3 étapes :
        </h2>

 <ul class="relative space-y-10 text-gray-700 justify-center items-center">
    <div class="absolute left-[30px] top-0 h-[95%] w-[2px] bg-accent-500"></div>

    <li class="relative flex items-start">
        <span class="ml-3 flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-accent-500 rounded-full text-xl shadow-lg z-10">
            1
        </span>
        <p class="ml-3 xl:ml-6  font-title text-base xl:text-lg w-full">
            <span class="font-semibold">Réservez en ligne :</span> Choisissez votre créneau horaire et votre psychologue agréé.
        </p>
    </li>

    <li class="relative flex items-start mr-9">
        <span class="ml-3  flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-accent-500 rounded-full text-xl shadow-lg z-10">
            2
        </span>
        <p class="ml-3 xl:ml-6  font-title text-base xl:text-lg w-full">
            <span class="font-semibold">Passez votre test :</span> Vous serez accueilli par un de nos psychologues qui vous expliquera le déroulement du test.
        </p>
    </li>

    <li class="relative flex items-start">
        <span class="ml-3  flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-accent-500 rounded-full text-xl shadow-lg z-10">
            3
        </span>
        <p class="ml-3 xl:ml-6 font-title text-base xl:text-lg w-full">
            <span class="font-semibold">Recevez vos résultats :</span> Vous recevrez vos résultats le jour même de votre test.
        </p>
    </li>
</ul>
        <!-- <div class="bar"></div> -->
        <div class="mt-8">

          <button
            class="rounded-md px-4 py-2 bg-accent-500 font-bold text-white"
          >
            Je réserve mon test psychotechnique
            <i class="fa fa-angle-right"></i>
          </button>

        </div>
    </div>
</div>
