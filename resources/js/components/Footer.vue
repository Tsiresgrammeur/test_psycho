<template>
  <footer class="bg-[#E5E7EB] w-full ">
    <p class="text-sm text-gray-500 ml-3">
        * Le prix barré représente le tarif maximum auquel le test psychotechnique a été
        vendu dans le département au cours des 15 derniers, jours hors offre de remboursement
        de 50€ avec Stych, notre partenaire auto-école en ligne.

    </p>
    <div class="bg-[#1F2937] text-white py-3">
      <div
        class="flex justify-center font-mono items-center"
      >
        <p class="text-lg font-medium">
          Sur 8027 avis clients, AAAEP.fr a obtenu la note de
        </p>
        <div class="flex flex-row justify-center mx-3">
          <div
            class="flex flex-row justify-center mx-[1px] py-[0.125rem] px-1 bg-[#00b67a] items-center star-container"
            v-for="n in 4"
            :key="n"
          >
            <i class="fas fa-star text-white xl:text-sm lg:text-xs z-10"></i>
          </div>

          <div
            class="relative flex justify-center items-center py-[0.125rem] px-1 w-full"
          >
            <div
              class="absolute top-0 left-0 w-1/2 h-full mx-[1px] bg-[#00b67a]"
            ></div>
            <div class="absolute top-0 right-0 w-1/2 h-full bg-[#DCDCE6]"></div>
            <i class="fas fa-star text-white xl:text-sm lg:text-xs z-10"></i>
          </div>
        </div>
        <p class="font-semibold mr-2">4.4/5</p>
        <p class="text-lg font-mono">

          Voir tous les avis clients aaaep.fr
        </p>
      </div>
    </div>
    <div class="grid grid-cols-4 py-10 max-lg:grid-cols-2 gap-8 px-4">
      <!-- Column 1 -->
      <div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Tous les tests psychotechnique
        </h3>
        <ul
          class="space-y-2 text-sm text-gray-600 custom-list leading-tight gap-1"
        >
          <li class="ml-4">Test psychotechnique Val-d'Oise (95)</li>
          <li class="ml-4">Test psychotechnique Nord (59)</li>
          <li class="ml-4">Test psychotechnique Seine-et-Marne (77)</li>
          <li class="ml-4">Test psychotechnique Isère (38)</li>
          <li class="ml-4">Test psychotechnique Rhône (69)</li>
          <li class="ml-4">Test psychotechnique Essonne (91)</li>
          <li class="ml-4">Test psychotechnique Yvelines (78)</li>
          <li class="ml-4">Test psychotechnique Gironde (33)</li>
          <li class="ml-4">Test psychotechnique Bouches-du-Rhône (13)</li>
          <li class="ml-4">Test psychotechnique Loire-Atlantique (44)</li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Récupérer son permis
        </h3>
        <ul class="space-y-2 text-sm text-gray-600 custom-list">
          <li class="ml-4">Suspension Permis de Conduire</li>
          <li class="ml-4">Annulation Permis de Conduire</li>
          <li class="ml-4">Invalidation Permis de Conduire</li>
        </ul>
        <h3 class="font-semibold text-[#1F2937] text-lg mt-6 mb-4">
          Entraînement au test psychotechnique
        </h3>
        <ul class="space-y-2 text-sm text-gray-600 custom-list">
          <li class="ml-4">Conseil Pratique au Test Psychotechnique</li>
        </ul>
        <h3 class="font-semibold text-[#1F2937] text-lg mt-6 mb-4">
          Législation du Permis de conduire
        </h3>
        <h3 class="font-semibold text-[#1F2937] text-lg mt-6 mb-4">
          Blog de Test Psychotechnique pour Permis de Conduire
        </h3>
      </div>

      <!-- Column 3 -->
      <div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Questions sur le test psychotechnique
        </h3>
        <ul class="space-y-2 text-sm text-gray-600 custom-list">
          <li class="ml-4">Visite Médicale pour Permis</li>
          <li class="ml-4">Ma préfecture et moi</li>
          <li class="ml-4">Où trouver mon médecin agréé ?</li>
        </ul>
        <h3 class="font-semibold text-lg mt-6 text-[#1F2937] mb-4">
          Tests psychotechniques professionnels
        </h3>
        <ul class="space-y-2 text-sm text-gray-600 custom-list">
          <li class="ml-4">Tests psychotechniques et conducteurs de la fonction publique</li>
          <li class="ml-4">Tests Psychotechniques pour les professionnels du privé</li>
          <li class="ml-4">Tests Psychotechniques pour les conducteurs de trains</li>
          <li class="ml-4">Test psychotechnique police municipale</li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Les Tests par Départements
        </h3>
        <div class="mb-4">
          <select class="w-full border rounded px-3 py-4 text-sm bg-white">
            <option>Choisir un département</option>
            <option>Département 1</option>
            <option>Département 2</option>
            <option>Département 3</option>
          </select>
        </div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Les Préfectures de France
        </h3>
        <div class="mb-4">
          <select class="w-full border rounded bg-white px-3 py-4 text-sm">
            <option>Choisir un département</option>
            <option>Département 1</option>
            <option>Département 2</option>
            <option>Département 3</option>
          </select>
        </div>
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Paiement Sécurisé
        </h3>
        <img
          src="https://fakeimg.pl/150x80?text=PayPal"
          alt="PayPal"
          class="mb-4"
        />
        <h3 class="font-semibold text-[#1F2937] text-lg mb-4">
          Contrôlez votre résultat
        </h3>
      </div>
    </div>
    <div class="py-8">
    <!-- Conteneur des images en colonne -->
    <div class="flex flex-row justify-center items-center gap-6">
      <!-- Image et légende pour chaque élément -->
      <div class="flex flex-col items-center">
        <img
          src="https://fakeimg.pl/200x100/?text=Logo1&font=lobster"
          alt="Logo 1"
          class="w-40 h-auto"
        />
      </div>
      <div class="flex flex-col items-center">
        <img
          src="https://fakeimg.pl/200x100/?text=Logo2&font=lobster"
          alt="Logo 2"
          class="w-40 h-auto"
        />
      </div>
      <div class="flex flex-col items-center">
        <img
          src="https://fakeimg.pl/200x100/?text=Logo3&font=lobster"
          alt="Logo 3"
          class="w-40 h-auto"
        />
      </div>
      <div class="flex flex-col items-center">
        <img
          src="https://fakeimg.pl/200x100/?text=Logo4&font=lobster"
          alt="Logo 4"
          class="w-40 h-auto"
        />
      </div>
      <div class="flex flex-col items-center">
        <img
          src="https://fakeimg.pl/200x100/?text=Logo5&font=lobster"
          alt="Logo 5"
          class="w-40 h-auto"
        />
      </div>
    </div>

    <!-- Texte explicatif sous les images -->
    <p class="text-center text-xs text-gray-500 mt-6">
      * Liens externes menant sur des sites gouvernementaux non-affiliés à
      AAAEP.
    </p>
  </div>



    <!-- Bottom Section -->
    <div class="bg-[#1F2937] text-white py-6">
      <div
        class="container mx-auto flex flex-col lg:flex-row justify-between items-center lg:space-y-0 px-4"
      >
    <div class="flex justify-center items-center gap-2 text-white">
      <a
        href="#"
        class="underline underline-dotted text-underline-offset"
      >
        Mentions Légales
      </a>
      <span class="text-gray-400">-</span>
      <a
        href="#"
        class="underline underline-dotted text-underline-offset"
      >
        CGV
      </a>
      <span class="text-gray-400">-</span>
      <a
        href="#"
        class="underline underline-dotted text-underline-offset"
      >
        Données Personnelles
      </a>
      <span class="text-gray-400">-</span>
      <a
        href="#"
        class="underline underline-dotted text-underline-offset"
      >
        Offre de Remboursement
      </a>
      <span class="text-gray-400">-</span>
      <a
        href="#"
        class="underline underline-dotted text-underline-offset"
      >
        Plateforme de Règlement en Ligne des Litiges (contact[at]aaaep.fr)
      </a>
    </div>
    <div class="flex space-x-4 text-gray-500">
          <a href="#" class="text-white">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "FooterSection",
};
</script>

<style scoped>
.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.custom-list li {
  position: relative;
  padding-left: 20px;
}
.custom-list li::before {
  content: ">>";
  position: absolute;
  font-family: Nunito;
  left: 0;
  color: gray;
}

.text-underline-offset {
     text-underline-offset: 6px; /* Décalage de 3px entre le texte et la ligne */
}

.underline-dotted {
  text-decoration: underline;
  text-decoration-style: dotted;
}
</style>
