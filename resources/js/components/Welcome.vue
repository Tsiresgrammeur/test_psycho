<template>
  <div class="logo-mobile">
    <img
      src="centre_national.png"
      alt="Centre National des Tests Psychotechniques"
      class="w-auto h-auto max-w-[200px] md:max-w-[300px]"
    />
  </div>
  <div class="homepage px-16 md:p-4 py-20">
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
      class="flex lg:flex-row xl:px-16 px-10 flex-col items-center justify-center lg:space-x-8 space-y-8 lg:space-y-0"
    >
      <!-- Left Content -->
      <div class="flex-1 lg:w-1/2 w-full max-lg:max-w-sm mb-20 lg:mb-0">
        <div
          class="flex flex-col items-start justify-center text-center lg:text-left"
        >
          <h1
            class="xl:text-3xl lg:text-2xl text-[#1E1E1E] md:text-xl sm:text-sm text-3xl font-bold font-title w-full leading-tight max-lg:mb-4 title"
          >
            Test psychotechnique : Récupérez votre permis
          </h1>
          <h2
            class="text-2xl xl:text-2xl text-[#1E1E1E] font-mono leading-tight mb-4"
          >
            Une démarche simple & rapide
          </h2>
        </div>
        <ul class="space-y-1 mb-6 pl-2 text-left">
          <li class="flex items-center">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 font-mono text-lg text-[#1E1E1E]"
              >97.8% de réussite à l'examen psychotechnique</span
            >
          </li>
          <li class="flex items-start">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 text-lg text-[#1E1E1E]"
              >Recevez vos résultats le jour de votre test</span
            >
          </li>
          <li class="flex items-start">
            <i class="fa fa-check-circle text-[#08BF26] font-light"></i>
            <span class="ml-2 text-lg text-[#1E1E1E]"
              >Centre enregistré, psychologues certifiés</span
            >
          </li>
        </ul>
        <div
          class="flex-col flex items-center justify-center text-center lg:w-fit"
        >
          <button
            class="rounded-md px-4 py-2 bg-[#BF2A6B] text-lg font-semibold font-title text-white"
          >
            Je réserve mon test psychotechnique
            <i class="fa fa-angle-right text-base font-semibold"></i>
          </button>
          <p class="mt-2 flex items-center text-center">
            <i class="fa fa-hand-pointer font-light text-[#7E87B4] mr-2"></i
            ><span class="font-mono">Entraînement Gratuit inclus</span>
          </p>
          <div class="flex w-2/3 justify-between">
            <div
              class="flex flex-col items-center justify-center text-center ml-2 border-gray-200"
            >
              <img
                src="https://fakeimg.pl/20x20/?text=Google&font=lobster"
                alt="G#00B67Aoogle Logo"
                class="mt-2"
              />
              <div class="flex items-center text-yellow-500 mb-2">
                <i class="fa fa-star text-base" v-for="n in 5" :key="n"></i>
              </div>
              <p class="text-xs">
                <span class="font-semibold">4.7 | 8.085 </span>avis
              </p>
            </div>

            <div
              class="flex flex-col items-start justify-center text-left ml-7 max-lg: mt-1 border-gray-200"
            >
            <div class="flex items-start text-left">
              <div class="flex flex-row text-left">
                <i class="fa fa-star text-xs text-[#00B67A]"></i>
                <span class="text-xs font-medium">Trustpilot</span>
              </div>
            </div>
              <div>
                <div class="flex flex-row justify-center">
                  <!-- First section: v-for loop for stars -->
                  <div
                    class="flex flex-row justify-center mx-[1px] py-[0.125rem] px-1  items-center star-container"
                    v-for="n in 4"
                    :key="n"
                  >
                    <i class="fa fa-star text-white text-sm"></i>
                  </div>

                  <!-- Second section: Half-colored background with a star -->
                  <div
                    class="relative flex justify-center items-center py-[0.125rem] px-1 w-full"
                  >
                    <!-- Left half (green) -->
                    <div
                      class="absolute top-0 left-0 w-1/2 h-full mx-[1px] bg-[#00b67a]"
                    ></div>
                    <!-- Right half (gray) -->
                    <div
                      class="absolute top-0 right-0 w-1/2 h-full bg-gray-500"
                    ></div>
                    <!-- Star icon -->
                    <i class="fa fa-star text-white text-sm z-10"></i>
                  </div>
                </div>
              </div>
              <p class="text-xs">
                <span>Truescore</span>
                <span class="font-semibold">4.7 | 8.085 </span>avis
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Video Section -->
      <div class="flex-shrink-0 w-2/5">
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
          <div class="blob-bg"></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
.homepage {
  border-top: 4px solid #bf2a6b;
  overflow: hidden;
  margin-bottom: 2rem;
  padding-bottom: 7rem;
}
.blob-bg {
  position: absolute;
  width: 1000px;
  height: 642px;
  background: #bf2a6b;
  border-top-left-radius: 50%;
  border-top-right-radius: 0;
  border-bottom-left-radius: 50%;
  border-bottom-right-radius: 50%;
  top: 30%;
  left: 72%;
  z-index: -1;
  transform: translate(-42%, -58%) rotate(-23deg);
}

.hero-video {
  width: 500px;
  height: 200px;
}

.logo-mobile {
  display: none;
}

@media only screen and (max-width: 1024px) {
  .blob-bg {
    position: absolute;
    width: 411px;
    height: 616px;
    background: #bf2a6b;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    top: 42%;
    left: 69%;
    z-index: -1;
    transform: translate(-71%, -44%) rotate(71deg);
  }
<<<<<<< HEAD
=======

  .homepage {
    border: 0;
  }
>>>>>>> 28375bb (fix pixel)
}

@media (max-width: 650px) {
  .logo-mobile {
    display: block;
    padding: 1rem;
    display: flex;
    justify-content: center;
    box-shadow: 1px 3px 22px -10px rgba(70, 70, 70, 0.52);
    -webkit-box-shadow: 1px 3px 22px -10px rgba(46, 46, 46, 0.52);
    -moz-box-shadow: 1px 3px 22px -10px rgba(55, 54, 54, 0.52);
  }
  .logo-desktop {
    display: none;
  }

  .homepage {
    padding: 25px;
    overflow-x: hidden;
    width: 100vw;
    padding-bottom: 7rem;
  }

  .blob-bg {
    position: absolute;
    width: 234;
    height: 386px;
    background: #bf2a6b;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    top: 42%;
    left: 69%;
    z-index: -1;
    transform: translate(-71%, -44%) rotate(71deg);
  }
}

.star-container {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  background-color: #00b67a;
}
</style>