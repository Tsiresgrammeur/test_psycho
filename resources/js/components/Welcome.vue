<template>
  <div class="px-20">
    <div
      class="flex flex-col items-center lg:items-start justify-center text-center w-full"
    >
      <img
        src="centre_national.png"
        alt="Centre National des Tests Psychotechniques"
        class="w-auto h-auto max-w-[200px] md:max-w-[300px]"
      />
    </div>
   <div
  class="flex lg:flex-row flex-col items-center justify-center lg:space-x-8 space-y-8 lg:space-y-0"
>
  <!-- Left Content -->
  <div class="flex-1 lg:w-1/2 w-full max-lg:max-w-sm">
    <div
      class="flex flex-col items-start justify-center text-center lg:text-left"
    >
          <h1
            class="xl:text-3xl lg:text-2xl text-3xl font-bold font-title w-full leading-tight mb-4 title"
          >
            Test psychotechnique : Récupérez votre permis
          </h1>
          <h2
            class="text-2xl xl:text-2xl ext-[#1E1E1E] font-mono leading-tight mb-6"
          >
            Une démarche simple & rapide
          </h2>
        </div>
        <ul class="space-y-2 mb-6 pl-2 text-left">
          <li class="flex items-start">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 font-mono text-lg"
              >97.8% de réussite à l'examen psychotechnique</span
            >
          </li>
          <li class="flex items-start">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 text-lg"
              >Recevez vos résultats le jour de votre test</span
            >
          </li>
          <li class="flex items-start">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 text-lg">Centre enregistré, psychologues certifiés</span>
          </li>
        </ul>
        <div
          class="flex-col flex items-center justify-center text-center lg:w-fit"
        >
          <button
            class="rounded-md px-4 py-2 bg-accent-500 text-xl font-bold text-white"
          >
            Je réserve mon test psychotechnique
            <i class="fa fa-angle-right"></i>
          </button>
          <p class="mt-2 flex text-center">
            <i class="fa fa-hand-pointer font-light mr-2"></i>Entraînement
            Gratuit inclus
          </p>
          <div class="flex">
            <p>text 1</p>
            <p>text 2</p>
          </div>
        </div>
      </div>
      <!-- Video Section -->
      <div class="flex-shrink-0 lg:w-2/5 w-4/5">
        <div class="relative pb-[56.25%] h-0">
          <iframe
            class="absolute top-0 left-0 w-full h-full"
            src="https://www.youtube.com/embed/zmjPmzJFEFA"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          >
          </iframe>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
</style>