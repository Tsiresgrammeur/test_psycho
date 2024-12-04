<template>
  <div class="px-10 xl:px-16 py-8 bg-gray-50">
    <!-- Title Section -->
    <div class="mb-8 text-center lg:text-left">
    <h2 class="text-2xl xl:text-3xl font-bold text-accent-500">
      Ce qu'en pensent nos candidats
    </h2>
  </div>

    <!-- Content Section -->
    <div
      class="flex flex-col justify-between lg:flex-row gap-2 bg-white rounded-xl shadow-lg xl:p-8 p-6"
    >
      <!-- Rating Section -->
      <div
        class="flex flex-col items-center max-lg:hidden justify-center text-center border-gray-200 w-72"
      >
        <p class="text-xl font-bold">Excellent</p>
        <div class="flex items-center text-yellow-500 mb-2">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
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
        <i class="fa fa-angle-left text-xl text-[#CBCBCB]"></i>
      </div>

      <!-- Review Cards Section -->
      <div class="flex flex-row gap-6 overflow-x-auto">
        <!-- Card 1 -->
        <div
          class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col xl:w-60 lg:w-72"
        >
          <div class="flex items-center mb-3">
            <img
              src="https://fakeimg.pl/40x40/?text=D&font=lobster"
              alt="Daniele"
              class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 rounded-full"
            />
            <div class="ml-3">
              <p class="font-bold lg-xl:text-sm">Daniele</p>
              <p class="text-xs text-gray-500">4 December 2023</p>
            </div>
          </div>
          <div class="text-yellow-500 mb-2">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p class="xl:text-base lg:text-[0.8rem] leading-tight">
            I had the procedure with Dr. Kovacs on the 1st of December. She and
            her team were very professional and cared about...
          </p>
          <a href="#" class="mt-2 text-gray-500 text-sm">Read more</a>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-gray-100 max-lg:hidden rounded-lg shadow-md p-4 flex flex-col xl:w-60 w-72"
        >
          <div class="flex items-center mb-3">
            <img
              src="https://fakeimg.pl/40x40/?text=A&font=lobster"
              alt="A.H. M."
              class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 rounded-full"
            />
            <div class="ml-3">
              <p class="font-bold lg-xl:text-sm">A.H. M.</p>
              <p class="text-xs text-gray-500">2 December 2023</p>
            </div>
          </div>
          <div class="text-yellow-500 mb-2">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p class="xl:text-base lg:text-[0.8rem] leading-tight">
            The idea was initially to my brother, we decided to contact other
            clinics but were slow to respond. Just little search on...
          </p>
          <a href="#" class="mt-2 text-gray-500 text-sm">Read more</a>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-gray-100 max-lg:hidden rounded-lg shadow-md p-4 flex flex-col xl:w-60 w-72"
        >
          <div class="flex items-center mb-3">
            <img
              src="https://fakeimg.pl/40x40/?text=T&font=lobster"
              alt="The Bearer of Light"
              class="xl:w-10 xl:h-10 lg:w-8 lg:h-8 rounded-full"
            />
            <div class="ml-3">
              <p class="font-bold lg-xl:text-sm">The Bearer of Light</p>
              <p class="text-xs text-gray-500">29 November 2023</p>
            </div>
          </div>
          <div class="text-yellow-500 mb-2">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p class="xl:text-base lg:text-[0.8rem] leading-tight">
            Hello everyone, my name is Rafael Moreira and I'm here to share my
            experience with the HairPalace clinic...
          </p>
          <a href="#" class="mt-2 text-gray-500 text-sm">Read more</a>
        </div>
      </div>
      <div class="flex justify-center items-center">
        <i class="fa fa-angle-right text-xl text-[#CBCBCB]"></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>