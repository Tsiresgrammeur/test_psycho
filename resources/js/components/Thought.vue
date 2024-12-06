<template>
  <div class="px-10 xl:px-16 py-8 w-full bg-gray-50">
    <!-- Title Section -->
    <div class="mb-8 text-center lg:text-left">
      <h2 class="max-lg:text-[32px] text-2xl xl:text-3xl font-bold text-[#BF2A6B]">
        Ce qu'en pensent nos candidats
      </h2>
    </div>

    <!-- Content Section -->
    <div
      class="flex flex-col max-lg:flex-row justify-center lg:justify-between lg:flex-row gap-2 bg-white rounded-xl shadow-lg w-full max-lg:w-[57%] max:lg:max-w-6xl max-lg:mx-auto xl:p-8 p-6"
    >
      <!-- Rating Section -->
      <div
        class="flex flex-col items-center mx-auto max-lg:hidden justify-center text-center border-gray-200 lg:w-72"
      >
        <p class="text-xl font-bold">Excellent</p>
        <div class="flex items-center text-yellow-500 mb-2">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p class="text-base">
          Based on <span class="font-semibold">414 reviews</span>
        </p>
        <img
          src="https://fakeimg.pl/100x30/?text=Google&font=lobster"
          alt="Google Logo"
          class="mt-2"
        />
      </div>

      <div class="flex justify-center items-center">
        <i
          class="fas fa-angle-left text-xl text-[#CBCBCB] cursor-pointer"
          @click="prev"
        ></i>
      </div>

      <!-- Review Cards Section -->
    <div class="flex flex-row gap-6 overflow-x-auto justify-center items-center">
  <!-- Loop for Cards -->
  <div
    v-for="(review, index) in reviews"
    :key="index"
    v-show="isVisible(index)"
    class="bg-gray-100 gap-2 rounded-lg shadow-md p-4 max-lg:p-16 flex flex-col w-full xl:w-60 lg:w-72 max-h-96 overflow-hidden"
  >
    <div class="flex items-center mb-3">
      <img
        :src="review.avatar"
        :alt="review.name"
        class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 rounded-full"
      />
      <div class="ml-3">
        <p class="font-bold lg-xl:text-sm max-lg:text-[23px]">{{ review.name }}</p>
        <p class="text-xs text-gray-500 max-lg:text-[17px]">{{ review.date }}</p>
      </div>
    </div>
    <div class="text-yellow-500 mb-2">
      <i class="fas fa-star" v-for="n in review.rating" :key="n"></i>
    </div>
    <p class="xl:text-base lg:text-[0.8rem] max-lg:text-[23px] leading-tight max-lg:leading-normal">
      {{ review.text }}
    </p>
    <a href="#" class="mt-2 text-gray-500 text-sm max-lg:text-[18px]">
      Read more
    </a>
  </div>
</div>

<div class="flex justify-center items-center">
  <i
    class="fas fa-angle-right text-xl text-[#CBCBCB] cursor-pointer"
    @click="next"
  ></i>
</div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      reviews: [
        {
          name: "Daniele",
          date: "4 December 2023",
          avatar: "https://fakeimg.pl/40x40/?text=D&font=lobster",
          rating: 5,
          text: "I had the procedure with Dr. Kovacs on the 1st of December. She and her team were very professional and cared about...",
        },
        {
          name: "A.H. M.",
          date: "2 December 2023",
          avatar: "https://fakeimg.pl/40x40/?text=A&font=lobster",
          rating: 5,
          text: "The idea was initially to my brother, we decided to contact other clinics but were slow to respond. Just little search on...",
        },
        {
          name: "The Bearer of Light",
          date: "29 November 2023",
          avatar: "https://fakeimg.pl/40x40/?text=T&font=lobster",
          rating: 5,
          text: "Hello everyone, my name is Rafael Moreira and I'm here to share my experience with the HairPalace clinic...",
        },
        {
          name: "Elena",
          date: "25 November 2023",
          avatar: "https://fakeimg.pl/40x40/?text=E&font=lobster",
          rating: 4,
          text: "The staff was very friendly, and the experience was very pleasant overall. Highly recommended for them",
        },
      ],
      currentIndex: 0,
      isMobile: false,
      cardsToShow: 3, 
    };
  },
  mounted() {
    this.updateIsMobile();
    window.addEventListener("resize", this.updateIsMobile);
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.updateIsMobile);
  },
  methods: {
  updateIsMobile() {
    this.isMobile = window.innerWidth < 1024; // Adjust for mobile view
  },
  next() {
    if (this.isMobile) {
      // On mobile, move to the next review in a loop.
      this.currentIndex = (this.currentIndex + 1) % this.reviews.length;
    } else {
      // On larger screens, move in steps of cardsToShow.
      if (this.currentIndex < this.reviews.length - this.cardsToShow) {
        this.currentIndex++;
      }
    }
  },
  prev() {
    if (this.isMobile) {
      // On mobile, move to the previous review in a loop.
      this.currentIndex = (this.currentIndex - 1 + this.reviews.length) % this.reviews.length;
    } else {
      // On larger screens, move in steps of cardsToShow.
      if (this.currentIndex > 0) {
        this.currentIndex--;
      }
    }
  },
  isVisible(index) {
    if (this.isMobile) {
      // For mobile, show one card based on currentIndex
      return index === this.currentIndex;
    } else {
      // For larger screens, show multiple cards based on cardsToShow
      const start = this.currentIndex;
      const end = start + this.cardsToShow;
      return index >= start && index < end;
    }
  },
},
};

</script>
