<template>
<div class="max-lg:px-28 max-lg:28 xl:p-16 p-12">
  <div class="flex items-start">
    <div class="w-full">
      <!-- Title Section -->
      <div class="flex flex-col items-start justify-center xl:p-20 p-16 bg-white rounded-2xl shadow-xl">
        <div class="mb-8 text-center lg:text-left">
          <h2 class="text-3xl font-semibold font-title text-[#36578A]">
            Préparez votre test psychotechnique
          </h2>
        </div>
        <div class="flex flex-col gap-4 w-full">
          <div
            v-for="(item, index) in questions"
            :key="index"
            class="border-b border-gray-300 py-2 max-lg:pb-10 text-[#585858]"
          >
            <div
              @click="toggleSection(index)"
              class="w-full flex justify-between items-center text-left text-lg cursor-pointer"
            >
              <div class="font-body max-lg:text-[28px] lg:text-[1.05rem] xl:text-[1.125rem]">{{ item.question }}</div>
              <div>
                <i
                  :class="activeSection === index ? 'fas fa-minus' : 'fas fa-plus'"
                  class="text-gray-500"
                ></i>
              </div>
            </div>
            <div v-if="activeSection === index" class="mt-2 text-gray-700">
              {{ item.answer }}
            </div>
          </div>
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
      activeSection: null,
      questions: [
        {
          question: "Combien de temps dure le test psychotechnique ?",
          answer:
            "Un test psychotechnique est une évaluation des aptitudes cognitives et comportementales, souvent utilisée pour valider ou reprendre un permis de conduire.",
        },
        {
          question:
            "Quels sont les documents à apporter le jour du passage du test psychotechnique pour permis de conduire ?",
          answer:
            "Les documents incluent une pièce d'identité, votre courrier d'annulation de permis, et votre attestation d'inscription.",
        },
        {
          question:
            "J’ai perdu ma notification de retrait de permis de conduire, est-elle obligatoire le jour de l'examen ?",
          answer:
            "Il est recommandé de contacter l’autorité compétente pour obtenir une copie ou une alternative.",
        },
        {
          question: "Je suis handicapé, puis-je passer les tests psychotechniques ?",
          answer:
            "Oui, les tests sont adaptés pour inclure des personnes ayant des besoins spécifiques.",
        },
      ],
    };
  },
  methods: {
    toggleSection(index) {
      this.activeSection = this.activeSection === index ? null : index;
    },
  },
};
</script>

<style scoped>
/* Add optional styling for hover effects */
div.cursor-pointer:hover {
  color: #36578a;
}
</style>
