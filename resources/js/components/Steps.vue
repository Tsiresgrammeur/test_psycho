<template>
  <div>
    <div
      class="flex flex-col max-lg:flex-col-reverse lg:flex-row items-center justify-center px-10 xl:px-16 py-8 bg-white"
    >
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
          <div
            class="absolute top-16 xl:right-8 lg:right-0 max-lg:-left-12 h-24 w-56 lg:w-48 lg:h-32 bg-white rounded-full shadow-2xl flex items-center justify-center"
          >
            <img
              src="https://fakeimg.pl/297x297/?text=User&font=lobster"
              alt="User Image"
              class="rounded-full"
            />
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div
        class="lg:flex-1 flex-grow lg:mt-0 items-center justify-center max-lg:px-[13.5rem] text-center lg:text-left"
      >
        <h2
          class="mb-16 text-[27px] xl:text-3xl font-title font-bold text-[#BF2A6B]"
        >
          Votre test psychotechnique en 3 étapes :
        </h2>
        <ul
          class="relative lg:space-y-10 space-y-5 text-gray-700 justify-center items-center"
        >
          <div
            class="absolute left-[30px] top-0 h-[95%] w-[2px] bg-[#BF2A6B]"
          ></div>

          <li class="relative flex items-start">
            <span
              class="ml-3 flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-[#BF2A6B] rounded-full text-xl shadow-lg z-10"
            >
              1
            </span>
            <p
              class="ml-3 xl:ml-6 font-title max-lg:text-left text-2xl lg:text-base xl:text-lg w-full"
            >
              <span class="font-semibold">Réservez en ligne :</span> Choisissez
              votre créneau horaire et votre psychologue agréé.
            </p>
          </li>

          <li class="relative flex items-start mr-9">
            <span
              class="ml-3 flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-[#BF2A6B] rounded-full text-xl shadow-lg z-10"
            >
              2
            </span>
            <p
              class="ml-3 xl:ml-6 font-title max-lg:text-left text-2xl lg:text-base xl:text-lg w-full"
            >
              <span class="font-semibold">Passez votre test :</span> Vous serez
              accueilli par un de nos psychologues qui vous expliquera le
              déroulement du test.
            </p>
          </li>

          <li class="relative flex items-start">
            <span
              class="ml-3 flex font-bold font-title items-center justify-center w-12 h-12 bg-white text-[#BF2A6B] rounded-full text-xl shadow-lg z-10"
            >
              3
            </span>
            <p
              class="ml-3 xl:ml-6 font-title max-lg:text-left text-2xl lg:text-base xl:text-lg w-full"
            >
              <span class="font-semibold">Recevez vos résultats :</span> Vous
              recevrez vos résultats le jour même de votre test.
            </p>
          </li>
        </ul>
        <!-- <div class="bar"></div> -->
        <div class="my-8">
          <button
            class="rounded-md px-4 py-2 bg-[#BF2A6B] text-xl font-bold text-white"
          >
            Je réserve mon test psychotechnique
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row px-10 xl:px-16 py-8 bg-white">
  <div class="max-lg:mb-32">
    <div class="text-center lg:text-left items-center lg:items-start w-full max-lg:px-52">
      <h2
        class="mb-10 text-[27px] max-lg:text-[32px] xl:text-3xl font-title font-bold text-[#BF2A6B]"
      >
        Votre entraînement Gratuit inclus
      </h2>
      <div class="font-title text-[#424242] text-lg space-y-4 mb-11">
        <p class="text-base max-lg:text-2xl max-lg:text-left font-title mx-auto lg:mx-0 lg:-mr-4 xl:mr-0 xl:text-lg">
          <span class="font-semibold"
            >Pour vous préparez au mieux à votre test,</span
          >
          nous avons mis à votre disposition un entraînement des types de test
          que vous pouvez rencontrer lors de votre examen.
        </p>
        <p class="text-base max-lg:text-2xl max-lg:text-left font-title mx-auto lg:mx-0 lg:-mr-4 xl:mr-0 xl:text-lg">
          Pour avoir accès à cet entraînement rien de plus simple : Réservez
          votre test psychotechnique et vous recevrez par mail vos identifiants
          pour commencer à vous
          <span class="font-semibold">entraîner en illimité !</span>
        </p>
        <p class="text-base max-lg:text-2xl max-lg:text-left font-title mx-auto lg:mx-0 lg:-mr-4 xl:mr-0 xl:text-lg">
          Ne laissez pas la peur vous freiner dans votre démarche, entrainez
          vous dès maintenant et soyez prêt pour le jour j.
        </p>

      </div>
          <button
            class="rounded-md px-4 py-2 bg-[#BF2A6B] text-xl font-bold text-white"
          >
            Je réserve mon test psychotechnique
            <i class="fas fa-angle-right"></i>
          </button>
    </div>
  </div>
  <div class="w-full xl:w-full max-w-lg flex justify-end items-center mx-auto">
  <img
    src="https://fakeimg.pl/669x669/?text=Laptop&font=lobster"
    alt="Laptop Image"
    class="shadow-lg w-full lg:w-4/5"
  />
</div>

</div>

  </div>
</template>

<script>
export default {};
</script>

<style>
</style>