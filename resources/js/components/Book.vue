<template>
  <div class="min-h-screen bg-gray-100 px-10 xl:px-16">
    <div class="max-w-7xl mx-auto space-y-6">
      <div class="mb-8 text-center lg:text-left">
        <h2
          class="max-lg:text-[32px] text-2xl xl:text-3xl text-title font-bold text-[#BF2A6B]"
        >
          Réservez votre test proche de chez vous
        </h2>
      </div>
      <!-- Search Section -->
      <div
        class="bg-white shadow-md p-6 rounded-[45px] flex items-center justify-between gap-4"
      >
        <!-- Location Input -->
        <div class="flex items-center gap-2">
          <div class="bg-gray-100 p-3 rounded-full">
            <i class="fas fa-map-marker-alt text-blue-500 text-lg"></i>
          </div>
          <input
            type="text"
            class="text-lg font-mono rounded-md p-3 focus:outline-none focus:ring-0 placeholder-gray-500 w-full"
            placeholder="Entrez une localisation"
            value="Aisne"
          />
        </div>
        <!-- Search Button -->
        <button
          class="bg-[#36578A] rounded-[38px] text-white px-6 py-3 shadow-md hover:bg-blue-600 flex items-center"
        >
          Rechercher
        </button>
      </div>

      <!-- Filters Section -->
      <div class="bg-[#E9E9E9] shadow-md p-6 pl-32 pr-0 pb-0 rounded-md">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
          <select
            class="form-select bg-[#E9E9E9] border-t border-b border-black p-2 w-[80%] h-fit text-gray-600"
          >
            <option>Filtrer par mois</option>
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
          </select>
          <!-- Filter by Day -->
          <select
            class="form-select bg-[#E9E9E9] border-t border-b border-black p-2 w-[80%] h-fit text-gray-600"
          >
            <option>Filtrer par jour</option>
            <option>Lundi</option>
            <option>Mardi</option>
            <option>Mercredi</option>
            <option>Jeudi</option>
            <option>Vendredi</option>
            <option>Samedi</option>
            <option>Dimanche</option>
          </select>
          <!-- Filter by Half-Day -->
          <select
            class="form-select bg-[#E9E9E9] border-t border-b border-black p-2 w-[80%] h-fit text-gray-600"
          >
            <option>Filtrer par demi-journée</option>
            <option>Matin</option>
            <option>Après-midi</option>
          </select>
          <!-- Filter Button -->
          <div class="flex flex-col items-center">
            <button
              class="bg-[#434343] w-[70%] text-white px-4 py-2 h-fit rounded-md shadow-md hover:bg-gray-800"
            >
              Filtrer
            </button>
            <button class="text-blue-500 underline mt-2">
              Réinitialiser les filtres
            </button>
          </div>
        </div>
      </div>

      <!-- Loading Section -->
      <div>
        <div class="flex items-center gap-2">
          <div
            class="animate-spin rounded-full h-4 w-4 border-b-2 border-[#36578A]"
          ></div>
          <p class="text-gray-600">Recherche en cours</p>
        </div>
        <div class="relative border-t-[6px] border-gray-300 mt-4">
          <div
            class="absolute -top-[6px] left-0 h-[6px] w-1/6 bg-[#36578A]"
          ></div>
        </div>
      </div>

      <!-- Results Section -->
      <div class="grid grid-cols-1 lg:grid-cols-3">
        <!-- Left Section -->
        <div class="lg:col-span-2 xl:w-full lg:w-[106%]">
          <div
            v-for="(result, index) in results"
            :key="index"
            class="bg-white shadow-md xl:p-6 lg:p-4 rounded-md mb-4"
          >
            <!-- Top Section: Date and Address -->
            <div class="flex justify-between">
              <div class="flex flex-row">
                <p class="xl:text-lg lg:text-[0.95rem] lg:w-fit pb-[0.125rem]">
                  {{ result.day }} <br />{{ result.date }}
                </p>
                <div
                  class="xl:text-lg lg:text-[0.95rem] ml-4 font-mono xl:pb-1 pb-2 flex flex-row items-end w-fit"
                >
                  <i
                    class="fas fa-map-marker-alt text-2xl text-[#6D6D6D] mr-1"
                  ></i>
                  {{ result.address }}
                </div>
              </div>
              <div class="mr-4">
                <div
                  class="text-right flex justify-end flex-row items-end gap-1"
                >
                  <p class="text-3xl font-bold font-title">
                    {{ result.price }}€
                  </p>
                  <p
                    class="text-sm items-end text-gray-500 pb-[0.125rem] line-through"
                  >
                    {{ result.originalPrice }}€
                  </p>
                </div>
                <div class="mr-4">
                  <p class="text-xs">Après remboursement</p>
                </div>
              </div>
            </div>

            <!-- Bottom Section: Warning and Button -->
            <div class="flex justify-between items-center">
              <div class="flex flex-row">
                <p class="pr-3 xl:text-lg lg:text-[0.95re">
                  {{ result.street }}
                </p>

                <div
                  class="text-sm text-[#B90909] flex flex-row items-center justify-center"
                >
                  ️<i class="fa-solid fa-triangle-exclamation"></i>
                  <span class="pt-[0.225rem] pl-1 font-mono"
                    >Dernière place à cette date</span
                  >
                </div>
              </div>
              <button
                class="bg-[#BF2A6B] text-white px-8 py-2 rounded-md font-mono hover:bg-pink-600 text-center flex items-center"
              >
                RÉSERVER<i class="fas fa-angle-right ml-2"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Right Section with relative positioning -->
        <div class="xl:pr-0 lg:pr-8 flex flex-col relative left-[3rem]">
          <div class="bg-white shadow-md w-full mb-2 pb-2 rounded-md">
            <!-- Title with Blue Background -->
            <h3
              class="text-base font-mono text-center text-white mb-4 bg-[#36578A] p-3"
            >
              Les tests par ville à Aisne (02)
            </h3>

            <!-- Buttons Section -->
            <div class="flex flex-row w-3/4 pl-4 gap-4 mb-4">
              <button
                class="bg-[#F8F9FB] font-mono shadow-md text-sm w-[70%] px-4 py-2 rounded-md"
              >
                Château-Thierry
              </button>
              <button
                class="bg-[#F8F9FB] font-mono shadow-md text-sm w-[70%] px-4 py-2 rounded-md"
              >
                Saint-Quentin
              </button>
            </div>
          </div>

          <!-- Success Rate Section -->
          <div class="pt-2 bg-white shadow-md w-full rounded-md">
            <div class="text-center p-4">
              <p>
                <i
                  class="fas fa-check-circle text-[#00D26A] text-lg font-light"
                ></i>
              </p>
              <div class="flex flex-row items-center px-8 justify-between">
                <div>
                  <i class="fas fa-angle-left text-base font-semibold"></i>
                </div>
                <p
                  class="text-4xl font-medium font-title flex justify-center items-center"
                >
                  97,7%
                </p>
                <div>
                  <i class="fas fa-angle-right text-base font-semibold"></i>
                </div>
              </div>

              <p class="">
                Taux de réussite <br />
                à nos tests psychotechniques
              </p>
            </div>
          </div>
          <div class="flex flex-row">
            <div class="mt-2 bg-white shadow-md w-[50%] rounded-md">
              <div
                class="flex flex-col items-center justify-center text-center border-gray-200"
              >
                <img
                  src="https://fakeimg.pl/20x20/?text=Google&font=lobster"
                  alt="G#00B67Aoogle Logo"
                  class="mt-2"
                />
                <div class="flex items-center text-yellow-500">
                  <i class="fas fa-star text-base" v-for="n in 5" :key="n"></i>
                </div>
                <p class="text-xs mb-2">
                  <span class="font-semibold">4.7 | 8.085 </span>avis
                </p>
              </div>
            </div>

            <div class="py-3 mt-2 bg-white shadow-md ml-5 w-[50%] rounded-md">
              <div
                class="flex flex-col items-center justify-center text-center border-gray-200"
              >
                <div class="flex items-start text-left">
                  <div class="flex flex-row text-left">
                    <i class="fas fa-star text-xs text-[#00B67A]"></i>
                    <span class="text-xs font-medium">Trustpilot</span>
                  </div>
                </div>
                <div>
                  <div class="flex flex-row justify-center">
                    <!-- First section: v-for loop for stars -->
                    <div
                      class="flex flex-row justify-center mx-[1px] py-[0.125rem] xl:px-1 lg:px-[0.125rem] bg-[#00B67A] items-center star-container"
                      v-for="n in 4"
                      :key="n"
                    >
                      <i
                        class="fas fa-star text-white xl:text-sm lg:text-xs"
                      ></i>
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
                        class="absolute top-0 right-0 w-1/2 h-full bg-[#DCDCE6]"
                      ></div>
                      <!-- Star icon -->
                      <i class="fas fa-star text-white text-sm z-10"></i>
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
          <div class="pt-2 bg-none w-full shadow-md rounded-md">
            <img
              src="https://fakeimg.pl/400x200/?text=Car&font=lobster"
              alt="Laptop Image"
              class="shadow-lg w-full"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      results: [
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },

        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
        {
          day: "Lundi",
          date: "04 Novembre 2024",
          address: "50 avenue d'Essômes, 02400 Château-Thierry",
          price: "77",
          originalPrice: "120",
          street: "02 Château-Thierry",
        },
      ],
    };
  },
};
</script>

<style>
</style>
